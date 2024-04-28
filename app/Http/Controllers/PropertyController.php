<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'address' => 'nullable',
            'price' => 'required',
            'guests' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validate each image
        ]);
    
        $property = Property::create([
            "user_id" => auth()->user()->id,
            "title" => $validatedData['title'],
            "description" => $validatedData['description'],
            "location" => $validatedData['location'],
            "address" => $validatedData['address'],
            "price" => $validatedData['price'],
            "guests" => $validatedData['guests'],
            "bedrooms" => $validatedData['bedrooms'],
            "bathrooms" => $validatedData['bathrooms'],
        ]);
    
        // Save Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/storage/img', $imageName);
    
                // Save Image to Database
                $property->images()->create(['image_path' => $imageName]);
            }
        }
    
        return redirect()->back()->with('success', 'Property created successfully!');
    }
    
    public function search(Request $request)
    {
        $validator = $request->validate([
            'city' => 'nullable|string',
            'guests' => 'nullable|integer|min:1',
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0',
            'bedrooms' => 'nullable|integer|min:0',
            'bathrooms' => 'nullable|integer|min:0',
            'sort_by' => 'nullable|in:price_low_to_high,price_high_to_low,date_added_desc', // Allow sorting options
        ]);
    
        $query = Property::query();
    
        // Apply search filters based on user input
        if ($request->has('city')) {
            $query->where('location', 'like', "%{$request->city}%");
        }
        if ($request->has('guests')) {
            $query->where('guest_capacity', '>=', $request->guests);
        }
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price_per_night', [$request->min_price, $request->max_price]);
        } else if ($request->has('min_price')) {
            $query->where('price_per_night', '>=', $request->min_price);
        } else if ($request->has('max_price')) {
            $query->where('price_per_night', '<=', $request->max_price);
        }
        if ($request->has('bedrooms')) {
            $query->where('bedrooms', '>=', $request->bedrooms);
        }
        if ($request->has('bathrooms')) {
            $query->where('bathrooms', '>=', $request->bathrooms);
        }
    
        // Implement sorting based on user selection (optional)
        if ($request->has('sort_by')) {
            switch ($request->sort_by) {
                case 'price_low_to_high':
                    $query->orderBy('price_per_night');
                    break;
                case 'price_high_to_low':
                    $query->orderBy('price_per_night', 'desc');
                    break;
                case 'date_added_desc':
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }
    
        $proprietes = $query->get();
    
        return view('search', compact('proprietes')); // Pass searched properties to view
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
        request()->validate([
            'user_id' => 'required|integer|exists:users,id', 
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'address' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'guests' => 'required|integer|min:1',
            'bedrooms' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            // 'images' => 'nullable|array',  
            ]);

    
            $property->update([
                "user_id" => Auth::user()->id,
                "title" => $request->title,
                "description" => $request->description,
                "location" => $request->location,
                "address" => $request->address,
                "price" => $request->price,
                "guests" => $request->guests,
                "bedrooms" => $request->bedrooms,
                "bathrooms" => $request->bathrooms,
    
            ]);
            // dd($property);

            return redirect()->back()->with("success", "your Property updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
        $property->delete();
        return redirect()->back()->with("success", "your Property deleted");

    }
}

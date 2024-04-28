<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($property)
    {
        //

        return view('booking', compact('property'));
    }

    public function store(Request $request)
    {

        // dd($request);
        request()->validate([
            'user_id' => '',
            'property_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'guests' => 'required',
            'total_price' => 'required',
        ]);
        Booking::create([
            "user_id" =>  $request->property_id,
            "property_id" => $request->property_id,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "guests" => $request->guests,
            "total_price" => $request->total_price,

        ]);


        return redirect()->back()->with("success", "your Booking saved");
    }

    public function show($property)
    {
        //
        $bookings = Booking::where('property_id', $property)->get();
        // dd($property);

        $events = $bookings->map(function (Booking $event) {
            $start = $event->start_date;
            $end = $event->end_date;
            // $startDateTime = new DateTime($event->startDate);
            // $endDateTime = new DateTime($event->endDate);
            // $start = $startDateTime->format('Y-m-d');
            // $end = $endDateTime->format('Y-m-d');
            return [
                'start' => $start,
                'end' => $end,
                // 'allday' => true,
                'title' => 'reserved'
            ];
        });
        return response()->json([
            "events" => $events
        ]);
    }


    public function update(Request $request, Booking $booking)
    {

        request()->validate([
            'user_id' => 'required',
            'property_id' => 'required',
            'stard_date' => 'required|after:today',
            'end_Date' => 'required|after:stard_date',
            'guests' => 'required|min:1',
            'total_price' => 'required|min:0',
        ]);

        $booking->update([
            "user_id" => $request->user_id,
            "property_id" => $request->property_id,
            "stard_date" => $request->stard_date,
            "end_Date" => $request->end_Date,
            "guests" => $request->guests,
            "total_price" => $request->total_price,
        ]);

        return redirect()->route("home.home")->with("success", "your Booking updated");
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route("home.home")->with("success", "your Booking deleted");
    }
}

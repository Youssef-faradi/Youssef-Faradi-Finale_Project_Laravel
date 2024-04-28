<x-app-layout>
    <div class="flex flex-wrap  md:justify-center lg:flex-row">
        <form action="{{ route('search') }}" method="GET"
            class="w-full md:w-[80vw] lg:w-[27vw]  h-screen  gap-4 bg-[--] flex flex-col items-center ">
            @csrf
            <h1 class="pb-[2vh]">Search for your Property</h1>
            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="city">City:</label>
                <input type="text" class="rounded-lg w-full form-control " id="city" name="city"
                    placeholder="Enter City ">
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="guests">Guests:</label>
                <input type="number" class="rounded-lg w-full form-control " id="guests" name="guests" min="1"
                    placeholder="Minimum Guests ">
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="min_price">Min Price per Night:</label>
                <input type="number" class="rounded-lg w-full form-control " id="min_price" name="min_price" min="0"
                    placeholder="Minimum Price ">
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="max_price">Max Price per Night:</label>
                <input type="number" class="rounded-lg w-full form-control " id="max_price" name="max_price" min="0"
                    placeholder="Maximum Price ">
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="bedrooms">Bedrooms:</label>
                <input type="number" class="rounded-lg w-full form-control " id="bedrooms" name="bedrooms" min="0"
                    placeholder="Minimum Bedrooms ">
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" class="rounded-lg w-full form-control " id="bathrooms" name="bathrooms" min="0"
                    placeholder="Minimum Bathrooms ">
            </div>

            <button type="submit" class="border-2 mt-3 cursor-pointer  bg-black hover:border-black   text-white hover:bg-[--orange]  px-3 py-2 rounded-xl  duration-700 flex items-center font-bold">Search Properties</button>
        </form>
        <div class="flex w-full  lg:w-[70vw]  py-[5vh]">
            <div class="flex flex-wrap gap-5  min-h-screen w-full  lg:w-[70vw] justify-center">
                @foreach ($properties as $property)
                    <div
                        class="dark  w-[90%] md:w-[45%]  lg:w-[22vw] h-[55vh] flex flex-col items-center rounded-xl shadow ">
                        @if ($property->images->count() > 0)
                            <div class="bg-cover w-[95%] relative h-[50%] bg-center rounded-xl bg-no-repeat"
                                style="background-image: url('{{ asset("storage/storage/img/{$property->images->first()->image_path}") }}');">
                            </div>
                        @else
                            <!-- Placeholder image if no images are available -->
                            <div class="bg-cover w-[95%] relative h-[50%] bg-center rounded-xl bg-no-repeat"
                                style="background-image: url('{{ asset('img/image.png') }}');">
                            </div>
                        @endif

                        <div class=" flex flex-col gap-3 px-[5%] pt-2">
                            <h1 class="text-xl font-extrabold">{{ $property->title }}</h1>
                            <div class="flex justify-around">
                                <h1 class="after:border-e-4 after:ps-[30%] after:border-[--vintage]"><i
                                        class="pe-2 fa-regular fa-star"></i>4.0</h1>
                                <h1 class="after:border-e-4 after:ps-[30%] after:border-[--vintage]"><i
                                        class="pe-2 fa-solid fa-location-dot"></i>{{ $property->location }}</h1>
                                <h1><i class="pe-2 fa-regular fa-calendar-days"></i>jul 2-7</h1>
                            </div>
                            <div class="flex justify-between items-center gap-5">
                                <div class="flex flex-col ">
                                    <h1 class="text-sm"><span
                                            class="font-extrabold text-xl">${{ $property->price }}</span>/night</h1>
                                    <p class="text-sm">including taxes and fees</p>
                                </div>
                                <a href="{{ route('booking.index', ['property' => $property]) }}"
                                    class="bg-black text-sm rounded-xl p-2 h-fit text-white border border-black  hover:bg-[--orange] duration-500 ">
                                    Book Now</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

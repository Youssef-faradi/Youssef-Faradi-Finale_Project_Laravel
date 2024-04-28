<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="flex justify-center ">
        <div class="landing w-[90vw] h-[50vh] lg:h-[70vh] py-[5vh] flex flex-col justify-center  items-center rounded-2xl">
            <h1 class="text-2xl lg:text-7xl font-extrabold text-white">Meet your people.</h1>
            <h1 class="text-2xl text-center px-[10%] lg:text-5xl text-white pb-[4vh] lg:pb-[8vh]  "> Choose where to stay and we'll show you who with!</h1>
            <a href="{{ route("search") }}"  class=" cursor-pointer px-[3vw] py-3  rounded-2xl text-2xl  flex items-center justify-center  bg-white  font-extrabold hover:border hover:border-white hover:bg-[--orange] hover:text-white hover:translate-y-1  duration-700">Book Now</a>
        </div> 
    </div>
    <div class="flex flex-col items-center gap-[5vh] justify-center px-[10vw] py-[8vh] ">
        <h1 class="text-2xl font-extrabold">Top Categories</h1>
        <div class="flex flex-wrap gap-5 justify-center">
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-umbrella-beach"></i>Beachfront</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-mountain-sun"></i>Mountain</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-city"></i>City</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-arrow-up-from-water-pump"></i>luxury</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-tree"></i>Cabins</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-house-chimney"></i>Cottage</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-plant-wilt"></i>Desert</button>
            <button  class="w-[30vw]   lg:w-[15vw] h-[7vh] shadow rounded-xl gap-3 flex items-center justify-center  bg-white font-extrabold hover:bg-black hover:text-[--orange] hover:translate-y-1 duration-500"><i class="fa-solid fa-bed"></i>Rooms</button>
        </div>
    </div>

    <div class=" px-[10vw] py-[5vh] flex flex-col gap-4">
        <div class="flex justify-between ">
            <div>
                <h1 class="text-xl md:text-2xl lg:text-3xl ">Popular Destinations</h1>
                <p class="text-xs md:text-sm lg:text-base pt-1">Explore The World By Making Beautiful Memories</p>
            </div>
            <a  href="{{ route("search") }}" class="cursor-pointer text-sm  lg:text-xl text-[#f97316] hover:underline">View All Destinations <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="flex flex-wrap md:justify-center lg:flex-nowrap gap-5 ">
            <div  class="distination relative w-full md:w-[45%]  lg:w-[20%] h-[40vh] rounded-xl " style="background-image: url('{{ asset('img/London.png') }}')">
                <div class="absolute w-full py-[10%] bottom-0 ps-[10%] flex flex-col gap-1 rounded-b-xl  bg-gradient-to-t from-black from-2% to-red-500/0">
                    <h1 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full ">London</h1>
                    <h4 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full">2000 Properties</h4>
                </div>
            </div>
            <div  class="distination relative w-full md:w-[45%]  lg:w-[20%] h-[40vh] rounded-xl " style="background-image: url('{{ asset('img/france.jpg') }}')">
                <div class="absolute w-full py-[10%] bottom-0 ps-[10%] flex flex-col gap-1 rounded-b-xl  bg-gradient-to-t from-black from-2% to-red-500/0">
                    <h1 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full ">Paris</h1>
                    <h4 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full">2000 Properties</h4>
                </div>
            </div>
            <div  class="distination relative w-full md:w-[45%]  lg:w-[20%] h-[40vh] rounded-xl " style="background-image: url('{{ asset('img/barcelone.jpg') }}')">
                <div class="absolute w-full py-[10%] bottom-0 ps-[10%] flex flex-col gap-1 rounded-b-xl  bg-gradient-to-t from-black from-2% to-red-500/0">
                    <h1 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full ">Barcelone</h1>
                    <h4 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full">2000 Properties</h4>
                </div>
            </div>
            <div  class="distination relative w-full md:w-[45%]  lg:w-[20%] h-[40vh] rounded-xl " style="background-image: url('{{ asset('img/roma.jpg') }}')">
                <div class="absolute w-full py-[10%] bottom-0 ps-[10%] flex flex-col gap-1 rounded-b-xl  bg-gradient-to-t from-black from-2% to-red-500/0">
                    <h1 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full ">Roma</h1>
                    <h4 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full">2000 Properties</h4>
                </div>
            </div>
            <div  class="distination relative w-full md:w-[45%]  lg:w-[20%] h-[40vh] rounded-xl " style="background-image: url('{{ asset('img/casa.jpg') }}')">
                <div class="absolute w-full py-[10%] bottom-0 ps-[10%] flex flex-col gap-1 rounded-b-xl  bg-gradient-to-t from-black from-2% to-red-500/0">
                    <h1 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full ">Casablanca</h1>
                    <h4 class="text-[--vintage] font-extrabold backdrop-blur bg-black/30 w-fit px-3 rounded-full">2000 Properties</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="md:px-[5vw] px-[10vw] py-[5vh] flex flex-col gap-4">
        <div class="flex justify-between md:px-[5vw] ">
            <div>
                <h1 class="text-xl md:text-2xl lg:text-3xl ">Offers Of The Week</h1>
                <p class=" text-xs md:text-sm lg:text-base pt-1">Seamlessly connecting you to your dream destinations</p>
            </div>  
            <a href="{{ route("search") }}" class="cursor-pointer text-sm lg:text-xl text-[#f97316] hover:underline">View More Offers <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="flex flex-wrap gap-5  justify-center">
            @foreach ($properties->take(5) as $property)
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
    
    {{-- <div class="px-[10vw]">
        <img src="{{ asset("img/experience.png") }}" alt="img">
    </div> --}}
</x-app-layout>

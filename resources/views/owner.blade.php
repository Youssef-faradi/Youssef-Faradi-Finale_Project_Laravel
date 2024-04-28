<x-app-layout>
    <div class="flex flex-wrap md:justify-center lg:flex-row">
        <form method="POST" class="w-full md:w-[80vw] lg:w-[27vw]  h-screen  bg-[--] flex flex-col items-center "
            action="{{ route('Property.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="title">Title:</label>
                <input type="text" placeholder="indert your title" class="rounded-lg w-full form-control" id="title" name="title"
                    value="{{ old('title') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="location">City:</label>
                <input placeholder="indert your city" type="text" class="rounded-lg w-full form-control" maxlength="10" id="location"
                    name="location" value="{{ old('location') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="address">Address:</label>
                <input type="text" placeholder="indert your Adress" class="rounded-lg w-full form-control" id="address" name="address"
                    value="{{ old('address') }}">
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="price">Price per Night:</label>
                <input type="number" placeholder="indert your Price " class="rounded-lg w-full form-control" id="price" name="price"
                    step="0.01" min="0" value="{{ old('price') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="guests">Guests:</label>
                <input type="number" placeholder="indert number of guests" class="rounded-lg w-full form-control" id="guests" name="guests"
                    min="1" value="{{ old('guests') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="bedrooms">Bedrooms:</label>
                <input type="number" placeholder="indert the number of bedrooms" class="rounded-lg w-full form-control" id="bedrooms" name="bedrooms"
                    min="1" value="{{ old('bedrooms') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" placeholder="indert the number of bathrooms" class="rounded-lg w-full form-control" id="bathrooms" name="bathrooms"
                    min="1" value="{{ old('bathrooms') }}" required>
            </div>

            <div class="form-group   w-[80%] flex flex-col justify-center items-center">
                <label for="description">Description:</label>
                <textarea placeholder="indert property description" class="rounded-lg w-full  form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group w-[80%] flex flex-col justify-center items-center">
                <label for="images">Images:</label>
                <input type="file" name="images[]" multiple>
            </div>


            <button type="submit"
                class="border-2 mt-3 cursor-pointer  bg-black hover:border-black   text-white hover:bg-[--orange]  px-3 py-2 rounded-xl  duration-700 flex items-center font-bold">Create
                Proprety</button>
        </form>
        <div class="flex w-full  lg:w-[70vw]  py-[5vh]">
            {{-- <div class="w-[30vw]">

        </div> --}}
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
                            <div class="flex justify-around">
                                <div class="max-w-2xl mx-auto">

                                    <!-- Modal toggle -->
                                    <button
                                        class="block p-2  rounded-xl border border-black text-white bg-[--lightgreen] hover:bg-black focus:ring-4 focus:ring-bdark:bg-gray-600 "
                                        type="button" data-modal-toggle="default-modal">
                                        Update
                                    </button>
                                    <!-- Main modal -->
                                    <div id="default-modal" data-modal-show="false" aria-hidden="true"
                                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                                        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="bg-white rounded-lg shadow relative dark:bg-gray-500">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3
                                                        class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                                                        Update Your Property
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="default-modal">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <form method="POST" class="   flex flex-col items-center "
                                                        action="{{ route('properties.update', ['property' => $property->id]) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="title">Title:</label>
                                                            <input type="text"
                                                                class="rounded-lg w-full form-control" id="title"
                                                                name="title" value="{{ $property->title }}"
                                                                required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="location">Location:</label>
                                                            <input type="text"
                                                                class="rounded-lg w-full form-control" maxlength="10"
                                                                id="location" name="location"
                                                                value="{{ $property->location }}" required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="address">Address:</label>
                                                            <input type="text"
                                                                class="rounded-lg w-full form-control" id="address"
                                                                name="address" value="{{ $property->address }}">
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="price">Price per Night:</label>
                                                            <input type="number"
                                                                class="rounded-lg w-full form-control" id="price"
                                                                name="price" step="0.01" min="0"
                                                                value="{{ $property->price }}" required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="guests">Guests:</label>
                                                            <input type="number"
                                                                class="rounded-lg w-full form-control" id="guests"
                                                                name="guests" min="1"
                                                                value="{{ $property->guests }}" required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="bedrooms">Bedrooms:</label>
                                                            <input type="number"
                                                                class="rounded-lg w-full form-control" id="bedrooms"
                                                                name="bedrooms" min="1"
                                                                value="{{ $property->bedrooms }}" required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="bathrooms">Bathrooms:</label>
                                                            <input type="number"
                                                                class="rounded-lg w-full form-control" id="bathrooms"
                                                                name="bathrooms" min="1"
                                                                value="{{ $property->bathrooms }}" required>
                                                        </div>

                                                        <div
                                                            class="form-group   w-[80%] flex flex-col justify-center items-center">
                                                            <label for="description">Description:</label>
                                                            <input class="rounded-lg w-full   form-control"
                                                                id="description" name="description" rows="5"
                                                                value="{{ $property->description }}" required>
                                                        </div>

                                                        <div
                                                            class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                            <button data-modal-toggle="default-modal" type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 duration-500  hover:border-white rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                                                            <button data-modal-toggle="default-modal" type="submit"
                                                                class="border-2  cursor-pointer  bg-[--lightgreen] hover:border-black   text-white   px-3 py-2 rounded-xl  duration-700 flex items-center font-bold">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Modal footer -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('Property.destroy', $property->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="hover:bg-black rounded-xl p-2 h-fit text-white border border-black  bg-red-700 duration-500 ">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div>{{ $properties->links() }}</div> --}}

            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
{{-- <body class="font-sans antialiased dark:bg-black dark:text-white/50 transition ease-in duration-700 ">
        <header class="flex flex-col items-center justify-center lg:grid-cols-3 relative">
            <label class=" inline-flex items-center cursor-pointer absolute top-4 right-6" onchange="toggleDarkMode()">
                <input class="sr-only peer" value="" type="checkbox" />
                <div
                    class="w-10 h-7 rounded-full ring-0 peer duration-500 outline-none bg-gray-200 overflow-hidden before:flex before:items-center before:justify-center after:flex after:items-center after:justify-center before:content-['☀️'] before:absolute before:h-5 before:w-5 before:top-1/2 before:bg-white before:rounded-full before:left-1 before:-translate-y-1/2 before:transition-all before:duration-700 peer-checked:before:opacity-0 peer-checked:before:rotate-90 peer-checked:before:-translate-y-full shadow-lg shadow-gray-400 peer-checked:shadow-lg peer-checked:shadow-gray-700 peer-checked:bg-[#383838] after:content-['🌑'] after:absolute after:bg-[#1d1d1d] after:rounded-full after:top-[4px] after:right-1 after:translate-y-full after:w-5 after:h-5 after:opacity-0 after:transition-all after:duration-700 peer-checked:after:opacity-100 peer-checked:after:rotate-180 peer-checked:after:translate-y-0">
                </div>
            </label>
    
            <div>
                <img src="{{ asset('img/Welcome.png') }}" alt="img" width="400px" height="400px" class="rounded-xl">
            </div>
            @if (Route::has('login'))
                <nav class=" flex flex-col gap-3">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black w-fit bg-rose-900 hover:text-black/70 focus:outline-none  dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md p-2  text-black bg-rose-900 w-fit  hover:text-black/70 focus:outline-none  dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black w-fit bg-rose-900 hover:text-black/70 focus:outline-none  dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <script>
            function toggleDarkMode() {
                var body = document.body;
                body.classList.toggle('dark:bg-black');
                body.classList.toggle('dark:text-white/50');
                // body.classList.toggle('light-mode');
            }
        </script>
    </body> --}}

<body class="relative transition ease-in duration-700 ">
    <label class=" inline-flex items-center cursor-pointer absolute top-4 right-6" onchange="toggleDarkMode()">
        <input class="sr-only peer" value="" type="checkbox" />
        <div
            class="w-10 h-7 rounded-full ring-0 peer duration-500 outline-none bg-gray-200 overflow-hidden before:flex before:items-center before:justify-center after:flex after:items-center after:justify-center before:content-['☀️'] before:absolute before:h-5 before:w-5 before:top-1/2 before:bg-white before:rounded-full before:left-1 before:-translate-y-1/2 before:transition-all before:duration-700 peer-checked:before:opacity-0 peer-checked:before:rotate-90 peer-checked:before:-translate-y-full shadow-lg shadow-gray-400 peer-checked:shadow-lg peer-checked:shadow-gray-700 peer-checked:bg-[#383838] after:content-['🌑'] after:absolute after:bg-[#1d1d1d] after:rounded-full after:top-[4px] after:right-1 after:translate-y-full after:w-5 after:h-5 after:opacity-0 after:transition-all after:duration-700 peer-checked:after:opacity-100 peer-checked:after:rotate-180 peer-checked:after:translate-y-0">
        </div>
    </label>
    <div class="w-full h-screen flex justify-center items-center">
        <div class="overlay w-[70%] h-[80%] shadow-xl rounded-[24px] overflow-hidden relative  ">
            <div class="signUp signpanel absolute    h-[100%]  left-[16%] top-[0%] flex flex-col items-center justify-center gap-4 w-[50%]  text-center ">
                <h1 class="text-4xl ">Sign Up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                <button onclick="swipToright()" class="bg-purple-500 text-white rounded-full w-[5vw] py-2">Sign
                    Up</button>
            </div>

            <div class="signIN signpanel signIN-style   absolute h-[100%] flex flex-col items-center justify-center right-[16%]  top-[0%] gap-4  w-[50%] text-center">
                <h1 class="text-4xl">Sign IN</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
                <button onclick="swipToright()"
                    class="bg-purple-500 text-white rounded-full w-[5vw] py-2">SignUp</button>

            </div>

            <div class="left-side w-[50%] h-[100%] absolute z-50 bg-black top-0 left-0  flex justify-center items-center ">
            </div>

        </div>
    </div>



    <script>
        const leftside = document.querySelector(".left-side");
        const signIN = document.querySelector(".signIN")
        const signUp = document.querySelector(".signUp")

        function swipToright() {
            leftside.classList.toggle("right");
            signIN.classList.toggle("signIN-style")
            signUp.classList.toggle("signUp-style")
           

        }
        function toggleDarkMode() {
            var elements = document.querySelectorAll('.dark');
            var body = document.body;
            body.classList.toggle('dark:bg-gray-900');
            elements.forEach(function(element) {
                element.classList.toggle('dark:bg-gray-700');
            });
        }
    </script>
</body>

</html>

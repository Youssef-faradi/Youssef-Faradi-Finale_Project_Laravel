<nav x-data="{ open: false }"
    class="w-full dark   transition ease-in duration-700  shadow fixed h-[11vh] flex items-center z-40 backdrop-blur bg-white justify-between px-[10vw] ">
    <!-- Primary Navigation Menu -->
    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('home') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center  p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden ">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="logo w-[10vw]  flex flex-col lg:flex-row items-center gap-3">
        <img src="{{ asset('img/logo.png') }}"  class="w-[100px]" height="" alt="">
        <div
            class="bg-gradient-to-r  from-[#ea580c] from-0%  via-[#f97316] via-30% to-[#fb923c] text-transparent bg-clip-text">
            <h1 class=" tracking-[5px] lg:tracking-[15px] font-extrabold text-xs lg:text-2xl ">TRIPICK</h1>
        </div>
    </div>
    <div class="flex gap-6 items-center pe-[5vw]">
        {{-- <form class="form relative ">
            <button class="absolute left-2 -translate-y-1/2 top-1/2 p-1">
                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-labelledby="search" class="w-5 h-5 text-[--orange]">
                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                        stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
            <input
                class="input rounded-full px-8 py-2 focus:border-none border-transparent focus:outline-black focus:ring-2 focus:ring-black placeholder-gray-400 transition-all duration-400 shadow-md"
                placeholder="Search..." required="" type="text" />
            <button type="reset" class="absolute right-3 -translate-y-1/2 top-1/2 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </form> --}}
        <div
            class="flex items-center border-2 border-gray-400 rounded-full py-[3%] lg:py-[9px] px-[9px] h-fit hover:translate-y-[2px] duration-500 hover:bg-gray-300">
            <i class="bi bi-chat-left-text text-xs lg:text-[17px]"></i>
        </div>
        <div
            class="flex items-center border-2   border-gray-400 rounded-full py-[3%] lg:py-1 px-2 h-fit hover:translate-y-[2px] duration-500 hover:bg-gray-300">
            <i class="bi bi-house-heart text-xs lg:text-xl  duration-500"></i>
        </div>
        @if (!Auth::check())
            <a href="{{ route('welcome') }}"
                class="border-2 cursor-pointer  bg-black hover:border-black   text-white hover:bg-[--orange]  px-3 py-1 lg:py-2 rounded-xl  duration-700 flex items-center font-bold">
                LogIn <i class="bi bi-person-circle text-xs lg:text-xl ps-1 hover:text-black"></i></a>
        @endif
        <label class=" inline-flex items-center cursor-pointer absolute top-[35%] md:right-[7%] md:top-[30%] lg:top-[30%] z-50 right-[3%] lg:right-[11%]"
            onchange="toggleDarkMode()">
            <input class="sr-only peer fixed" value="" type="checkbox" />
            <div
                class="w-10 h-7 rounded-full ring-0 peer duration-500 outline-none bg-gray-200 overflow-hidden before:flex before:items-center before:justify-center after:flex after:items-center after:justify-center before:content-['☀️'] before:absolute before:h-5 before:w-5 before:top-1/2 before:bg-white before:rounded-full before:left-1 before:-translate-y-1/2 before:transition-all before:duration-700 peer-checked:before:opacity-0 peer-checked:before:rotate-90 peer-checked:before:-translate-y-full shadow shadow-gray-400 peer-checked:shadow peer-checked:shadow-gray-700 peer-checked:bg-[#383838] after:content-['🌑'] after:absolute after:bg-[#1d1d1d] after:rounded-full after:top-[4px] after:right-1 after:translate-y-full after:w-5 after:h-5 after:opacity-0 after:transition-all after:duration-700 peer-checked:after:opacity-100 peer-checked:after:rotate-180 peer-checked:after:translate-y-0">
            </div>
        </label>
        @if (Auth::check())
        <div class="h-fit  flex justify-center items-center ">
            <div x-data="{ open: false }" class="bg-white w-fit  flex justify-center items-center">
                <div @click="open = !open" class="relative border-b-4 border-transparent py-3"
                    :class="{ 'border-indigo-700 transform transition duration-300 ': open }"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100">
                    <div class="flex justify-center items-center space-x-3 cursor-pointer">
                        <div class="w-12 h-12 rounded-full overflow-hidden border-2 shadow dark:border-white border-gray-900">
                            <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                        <ul class="space-y-3 dark:text-white">
                            <li class="font-medium cursor-pointer">
                                <a href="{{ route('home') }}"
                                    class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                    <div class="mr-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    Home
                                </a>
                            </li>
                            <li class="font-medium">
                                <a 
                                href="{{ route('profile.edit') }}"
                                    class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                    <div class="mr-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    Profile
                                </a>
                            </li>
                            <hr class="dark:border-gray-700">
                            <li class="font-medium ">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                        {{ __('Log Out') }}
                                        class="cursor-pointer flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                        <div class="mr-3 text-red-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                        </div>
                                        Logout
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        @endif
        
    </div>
</nav>
<div class="h-[13vh]">

</div>

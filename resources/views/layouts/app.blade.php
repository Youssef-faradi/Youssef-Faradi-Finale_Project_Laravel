<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    {{-- full calendar --}}
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>


</head>

<body class="font-sans antialiased  relative transition ease-in duration-700 ">

    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @include('layouts.footer')

    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

    <script>
        const leftside = document.querySelector(".left-side");
        const signIN = document.querySelector(".signIN")
        const signUp = document.querySelector(".signUp")

        function swipToright() {
            leftside.classList.toggle("right");
            signIN.classList.toggle("signIN-style")
            signUp.classList.toggle("signUp-style")
        }
        const elements = document.querySelectorAll('.dark');
        const darkers = document.querySelectorAll('.darker');
        const body = document.body;
        function toggleDarkMode() {
            body.classList.toggle('dark:bg-gray-900');
            elements.forEach(function(element) {
                element.classList.toggle("bg-white");
                element.classList.toggle("text-white");
                element.classList.toggle("bg-gray-800");
                element.classList.toggle("shadow-white");
            });
            darkers.classList.remove("bg-black");
         

            // elements.forEach(function(darker) {
            //     darker.classList.toggle("bg-white");
            //     darker.classList.toggle("text-white"); 
            //     darker.classList.toggle("bg-gray-800"); 
            //     darker.classList.toggle("bg-black"); 

            // });
        }







        let modal = document.getElementById("modal");

        function modalHandler(val) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
        const today = new Date();
        const myDateInput = document.getElementById('myDate');

        myDateInput.addEventListener('keydown', function(event) {
            const enteredDate = new Date(this.value);
            if (enteredDate > today) {
                event.preventDefault();
                this.value = this.max;
            }
        });
    </script>
</body>

</html>

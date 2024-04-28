<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="w-full h-screen relative">
        <img src="{{ asset("img/eroor.gif   ") }}" class="w-full h-screen z-10" alt="">
        <a href="/" class="absolute w-[10vw] h-9  rounded-lg  flex items-center justify-center top-[60%] right-[45%] bg-white z-50">Go Back Home</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="box-border min-h-screen bg-white">
<!-- HEADER -->
<header class="mb-20">
    <!-- LOGO -->
    <div class="flex justify-between pl-5 bg-white">
        <div class="flex flex-col items-center justify-center sm:flex-row">
            <object id="tailwind-logo" class="w-10 h-10 sm:h-16 sm:w-16" data="{{ asset('svg/tailwindcss.svg') }}" type=""></object>
            <h1 class="text-sm font-bold text-left sm:text-3xl sm:pl-7">FORUM V1</h1>
        </div>
        <div class="flex flex-col items-end justify-center pr-5 font-semibold text-blue-900">
            <a href="#" class="text-right transition-all duration-300 hover:text-blue-400">my Github</a>
            <a href="#" class="text-right transition-all duration-300 hover:text-blue-400">my Homepage</a>
        </div>
    </div>
    <!-- NAVBAR -->
    <div class="flex justify-center bg-blue-800 sm:justify-end sm:p-5">
        <nav class="text-xl font-semibold text-white">
            <ul class="flex flex-wrap justify-center p-2 space-x-5">
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">Forum</a></li>
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">About</a></li>
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">Dashboard</a></li>
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">Login</a></li>
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">Register</a></li>
                <li><a href="#" class="transition-all duration-300 hover:text-blue-100">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<footer class="content-center bg-white border-t">
    <div class="md:flex md:gap-5 md:w-5/6 md:m-auto md:flex-col">
        <div class="pt-5 md:justify-between md:flex">
            <h1 class="mb-8 text-2xl font-bold text-center text-black lg:text-left lg:text-2xl title-font">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quia aperiam fuga libero quisquam autem!
            </h1>
            <div class="text-center lg:w-full lg:text-right lg:w-1/3 md:w-1/2">
                <h1 class="mb-3 text-sm font-semibold tracking-widest text-black uppercase title-font">
                    Company
                </h1>
                <nav class="mb-10 list-none">
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Home</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">About</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Carriers</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Pricing</a>
                    </li>
                </nav>
            </div>
            <div class="text-center lg:w-full lg:text-right lg:w-1/3 md:w-1/2">
                <h1 class="mb-3 text-sm font-semibold tracking-widest text-black uppercase title-font">Legal
                </h1>
                <nav class="mb-10 list-none">
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Terms Of Service</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Trademark Policy</a>
                    </li>
                    <li>
                        <a class="text-sm text-gray-600 hover:text-gray-800">Inactivity Policy</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>
    <div class="flex items-center w-full pl-5 text-3xl font-bold bg-blue-800 h-14">
        <div class="text-white">Demo</div>
    </div>
</footer>


</body>
</html>

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
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body class="box-border min-h-screen bg-white">
<!-- HEADER -->
<header class="mb-20">
    <!-- LOGO -->
    <div class="flex justify-between pl-5 bg-white">
        <div class="flex flex-col items-center justify-center sm:flex-row">
            <a href="{{ route('index') }}" class="transform hover:scale-110 transition-all duration-300">
                <div class="pointer-events-none">
                    <object id="tailwind-logo" class="w-10 h-10 sm:h-16 sm:w-16"
                            data="{{ asset('svg/tailwindcss.svg') }}"
                            type=""></object>
                </div>
            </a>
            <h1 class="text-sm font-bold text-left sm:text-3xl sm:pl-7">FORUM V1</h1>
        </div>
        <div class="flex flex-col items-end justify-center pr-5 font-semibold text-blue-900">
            <a target="_blank" href="https://github.com/macke89"
               class="text-right transition-all duration-300 hover:text-blue-400">my
                Github</a>
            <a target="_blank" href="https://mo-webdesign.com/"
               class="text-right transition-all duration-300 hover:text-blue-400">my
                Homepage</a>
        </div>
    </div>
    @include('layouts.navigation')
</header>
<main class="content-center p-2 md:flex md:gap-5 lg:w-5/6 md:m-auto md:max-w-5xl">
    {{ $slot }}
    @include('layouts.sidebar')
</main>

<footer class="content-center bg-white border-t mt-10">
    <div class="md:flex md:gap-5 md:w-5/6 md:m-auto md:flex-col">
        <div class="pt-5 md:justify-between md:flex">
            <h1 class="mb-8 text-2xl font-bold text-center text-black lg:text-left lg:text-2xl title-font">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quia aperiam fuga libero quisquam
                autem!
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
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>

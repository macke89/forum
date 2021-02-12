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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header class="text-gray-700 bg-white border-t border-b body-font">
    <div class="container flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row ">
        <a class="flex items-center w-40 mb-4 font-medium text-gray-900 title-font md:mb-0">
            <img src="../badges/WhitePink.svg" alt="">
        </a>
        <nav class="flex flex-wrap items-center justify-center text-base ">
            <a href="{{ route('index') }}"
               class="mr-5 text-m font-semibold text-blue-500 lg:ml-24 hover:text-blue-800">Forum</a>
            <a href="#" class="mr-5 text-m font-semibold text-blue-500 hover:text-blue-800">Members</a>
            <a href="#" class="mr-5 text-m font-semibold text-blue-500 hover:text-blue-800">Recent Posts</a>
        </nav>
        <div class="flex ml-auto space-x-5">
            <x-link-button link="login" style="full">Login</x-link-button>
            <x-link-button link="register" style="light">Register</x-link-button>
        </div>
    </div>
</header>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<footer class="mt-10 text-gray-700 bg-white border-t body-font">
    <div class="border-t border-gray-200">
        <div class="container flex flex-col flex-wrap items-center justify-between p-5 mx-auto md:flex-row">
            <a class="flex items-center w-48 mb-4 font-medium text-gray-900 title-font md:mb-0">
                <img src="../badges/WhitePink.svg" alt="">
            </a>
            <div class="flex flex-wrap items-center justify-center mx-auto text-base ">
                <a href="#" class="justify-center mr-5 text-sm text-center text-gray-600 hover:text-gray-800">
                    Prices</a>
                <a href="#" class="justify-center mr-5 text-sm text-center text-gray-600 hover:text-gray-800">
                    Contact</a>
                <a href="#" class="justify-center mr-5 text-sm text-center text-gray-600 hover:text-gray-800">
                    Services</a>
                <a href="#" class="justify-center mr-5 text-sm text-center text-gray-600 hover:text-gray-800">
                    About</a>
            </div>
            <div class="inline-flex items-center justify-center md:justify-start ">
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                <a class="text-blue-807 hover:text-blue-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
                </a>
                <a class="ml-4 text-blue-870 hover:text-blue-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-5 h-5" viewBox="0 0 24 24">
                <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                </path>
                </svg>
                </a>
                <a class="ml-4 text-blue-870 hover:text-blue-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
                </a>
                </span>
            </div>
        </div>
        <div
            class="flex flex-wrap items-center justify-center py-6 mx-auto text-base bg-blueGray-900 ">
            <p class="text-sm text-center text-gray-200 ">© Your Company — 2020
            </p>
        </div>
    </div>
</footer>


</body>
</html>

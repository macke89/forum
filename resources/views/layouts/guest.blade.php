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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="box-border min-h-screen bg-white">
<!-- HEADER -->
<header class="mb-20">
    <!-- LOGO -->
    <div class="flex justify-between pl-5 bg-white">
        <div class="flex flex-col items-center justify-center sm:flex-row">
            <object id="tailwind-logo" class="w-10 h-10 sm:h-16 sm:w-16" data="{{ asset('svg/tailwindcss.svg') }}"
                    type=""></object>
            <h1 class="text-sm font-bold text-left sm:text-3xl sm:pl-7">FORUM V1</h1>
        </div>
        <div class="flex flex-col items-end justify-center pr-5 font-semibold text-blue-900">
            <a target="_blank" href="https://github.com/macke89" class="text-right transition-all duration-300 hover:text-blue-400">my
                Github</a>
            <a target="_blank" href="https://mo-webdesign.com/" class="text-right transition-all duration-300 hover:text-blue-400">my
                Homepage</a>
        </div>
    </div>
    <!-- NAVBAR -->
    <div class="flex justify-center bg-blue-800 sm:justify-end sm:p-5">
        <nav class="text-xl font-semibold text-white">
            <ul class="flex flex-wrap justify-center p-2 space-x-5">
                <li>
                    <a href="{{ route('index') }}" class="transition-all duration-300 hover:text-blue-100">Forum</a>
                </li>
                @guest()
                    <li>
                        <a href="{{ route('login') }}" class="transition-all duration-300 hover:text-blue-100">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="transition-all duration-300 hover:text-blue-100">Register</a>
                    </li>
                @endguest
                @auth()
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="transition-all duration-300 hover:text-blue-100">Dashboard</a>
                    </li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a :href="route('logout')"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();"
                           class="transition-all duration-300 hover:text-blue-100 cursor-pointer">
                            {{ __('Logout') }}
                        </a>
                    </form>


                    {{--                    <li>--}}
                    {{--                        <a href="{{ route('logout') }}"--}}
                    {{--                           class="transition-all duration-300 hover:text-blue-100"--}}
                    {{--                           onclick="event.preventDefault();--}}
                    {{--                                                this.closest('form').submit();">--}}
                    {{--                            {{ __('Logout') }}</a>--}}
                    {{--                    </li>--}}
                @endauth
            </ul>
        </nav>
    </div>
</header>
<main class="content-center p-2 md:flex md:gap-5 lg:w-5/6 md:m-auto">
{{ $slot }}
<!-- SIDEBAR -->
    <div class="flex flex-col flex-initial max-w-md m-auto mt-16 mb-10 md:mt-0 md:w-2/6">
        <div class="bg-blue-50 p-5">
            <div class="flex flex-col">
            @auth()
                <!-- NEW THREAD -->
                    <a class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700"
                       href="#">
                        New Thread
                    </a>
            @endauth
            <!-- MOST RECENT THREADS -->
                <div class="w-full mb-2 overflow-hidden border-t tab">
                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                    <label
                        class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
                        for="tab-single-one">
                        Most Recent
                    </label>
                    <div class="overflow-hidden leading-normal bg-white tab-content">
                        @foreach($mostRecentThreads as $thread)
                            <div class="p-3 border-b-2 border-blue-50">
                                {{ $thread->title }} <br>
                                {{ $thread->created_at->diffForHumans() }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- MOST POPULAR THREADS -->
                <div class="w-full mb-10 overflow-hidden border-t tab">
                    <input class="absolute opacity-0" id="tab-popular-one" type="radio" name="tabs2">
                    <label
                        class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
                        for="tab-popular-one">
                        Most Popular
                    </label>
                    <div class="overflow-hidden leading-normal bg-white tab-content">
                        @foreach($mostPopularThreads as $thread)
                            <div class="p-3 border-b-2 border-blue-50">
                                {{ $thread->title }} <br>
                                {{ $thread->posts->count() }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- STATISTICS -->
            <div>
                <h5 class="pl-2 mb-5 text-2xl font-bold text-blue-900 bg-white border-l-4 border-blue-900">Forum
                    Statistics</h5>
                <ul>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Members:</div>
                        <div class="font-semibold">{{ $users->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Threads:</div>
                        <div class="font-semibold">{{ $threads->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Posts:</div>
                        <div class="font-semibold">{{ $posts->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl">
                        <div class="font-bold">Reports:</div>
                        <div class="font-semibold">{{ $reports->count() }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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

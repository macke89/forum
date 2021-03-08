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
                    <a href="{{ route('register') }}"
                       class="transition-all duration-300 hover:text-blue-100">Register</a>
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

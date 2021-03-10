<x-guest-layout>

    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <label class="font-semibold text-blue-900" for="email">Email</label>

                <input type="email" name="email" id="email" class="block w-full mt-1">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="font-semibold text-blue-900" for="password">Email</label>

                <input type="password" name="password" id="password" class="block w-full mt-1">
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">

            </div>

            <div class="flex items-center justify-between mt-1 mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me"
                           type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <button
                class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                Login
            </button>
        </form>
    </div>
</x-guest-layout>

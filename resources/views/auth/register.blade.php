<x-guest-layout>
    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <label class="font-semibold text-blue-900" for="name">name</label>
                <input type="text" name="name" id="name" class="block w-full mt-1">
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label class="font-semibold text-blue-900" for="email">Email</label>
                <input type="email" name="email" id="email" class="block w-full mt-1">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="font-semibold text-blue-900" for="password">Password</label>
                <input id="password"
                       class="block mt-1 w-full"
                       type="password"
                       name="password"
                       required
                       autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label class="font-semibold text-blue-900" for="password">Confirm Password</label>

                <input id="password_confirmation"
                       class="block mt-1 w-full"
                       type="password"
                       name="password_confirmation"
                       required/>
            </div>

            <div class="flex items-center justify-end mt-4 flex-col">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button
                    class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300 mt-2">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>

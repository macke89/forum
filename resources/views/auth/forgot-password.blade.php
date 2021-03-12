<x-guest-layout>

    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
        <div class="mb-4 text-blue-900">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <label class="font-semibold text-blue-900" for="email">Email</label>

                <input type="email" name="email" id="email" class="block w-full mt-1" required>
            </div>
            <div class="flex items-center justify-end mt-4">
                <button
                    class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>

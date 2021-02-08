<x-guest-layout>
    <header class="text-gray-700 bg-white border-t border-b body-font">
        <div class="container flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row ">
            <a class="flex items-center w-40 mb-4 font-medium text-gray-900 title-font md:mb-0">
                <img src="../badges/WhitePink.svg" alt="">
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base ">
                <a href="#" class="mr-5 text-sm font-semibold text-gray-600 lg:ml-24 hover:text-gray-800">Pricing</a>
                <a href="#" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Contact</a>
                <a href="#" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Services</a>
                <a href="#" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Now</a>
            </nav>
            <div class="flex ml-auto space-x-5">
                <x-link-button link="login" style="full">Login</x-link-button>
                <x-link-button link="register" style="light">Register</x-link-button>
            </div>
        </div>
    </header>
    <main
        class="container w-full p-20 m-4 mx-auto my-16 text-center bg-white border-2 border-dashed border-blueGray-300 h-96 rounded-xl">
        <p class="mt-20 italic tracking-tighter text-md text-blueGray-500 title-font">
            -- Content goes here --
        </p>
    </main>
</x-guest-layout>

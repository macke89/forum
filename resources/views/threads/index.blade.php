<x-guest-layout>
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
    <main
        class="container w-full p-20 m-4 mx-auto my-16 text-center bg-white border-2 border-dashed border-blueGray-300 rounded-xl">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        {{--START CATEGORIES--}}
                        <table class="min-w-full divide-y divide-gray-200">
                            @foreach($categories as $category)
                                {{--CATEGORY NAME--}}
                                <thead class="bg-gradient-to-r from-blue-400 to-black-500">
                                <tr>
                                    <th scope="col" colspan="5"
                                        class="py-3 text-center text-l font-bold text-blue-600 uppercase tracking-wider m-auto bg-gradient-to-r from-blue-100 via-green-100 to-yellow-100">
                                        {{ $category->name }}
                                    </th>
                                </tr>
                                </thead>
                                {{--START THREADS--}}
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($category->threads as $thread)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-left">
                                            <div class="text-sm text-gray-900">{{ $thread->title }}</div>
                                            <div class="text-sm text-gray-500">{{ $thread->subtitle }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                                         alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $thread->user->name }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                          Active
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More items... -->
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </main>
</x-guest-layout>

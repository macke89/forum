<x-guest-layout>
    <main class="container w-full m-4 mx-auto my-16 text-center flex flex-col p-3">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="overflow-hidden">
            <div
                class="py-3 text-center text-l font-bold text-blue-600 uppercase tracking-wider m-auto bg-gradient-to-r from-blue-100 via-green-100 to-yellow-100">
                {{ $thread->title }}
            </div>
            @foreach($thread->posts as $post)
                <div class="container mx-auto mb-20 second:rounded-t-lg">
                    <div class="w-full bg-gray-100 h-14 flex justify-between p-5 items-center">
                        <div class="flex justify-between items-center">
                            <img class="h-10 w-10 rounded-full mr-4"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                 alt="">
                            <div>{{ $post->user->name }}</div>
                        </div>
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Active
                        </span>
                        <div>
                            {{ $post->created_at }}
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-gray-50 p-5 text-left">
                        {{ $post->body }}
                    </div>
                    <div class="flex bg-gray-100 pl-2 pr-2 justify-between">
                        @auth()
                            <x-link-button link="index" style="light">Send PM</x-link-button>
                            <x-link-button link="index" style="red">Report</x-link-button>
                        @endauth
                    </div>
                </div>
            @endforeach
            <div class="mb-3 pt-0">
                <input type="text" placeholder="Placeholder"
                       class="px-3 py-4 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-base shadow outline-none focus:outline-none focus:shadow-outline w-full"/>
            </div>
        </div>
    </main>
</x-guest-layout>

<x-guest-layout>
    <main class="container w-full m-4 mx-auto my-16 text-center flex flex-col p-3">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="overflow-hidden">
            <div
                class="py-3 flex justify-between items-center text-center text-l font-bold text-blue-600 uppercase tracking-wider m-auto bg-gradient-to-r from-blue-100 via-green-100 to-yellow-100">
                <x-link-button link="index" style="light" class="ml-5">Send PM</x-link-button>
                <div>{{ $thread->title }}</div>
                <x-link-button link="index" style="red" class="mr-5">Report</x-link-button>

            </div>
            <div class="container mx-auto p-5 second:rounded-t-lg text-left bg-gradient-to-r from-gray-50 to-blue-50">
                {{ $thread->body }}
            </div>
            <div class="flex bg-gray-100 pl-2 pr-2 justify-between p-2 mb-20">
                <div class="ml-3"><b>Created: </b>{{ $thread->created_at->diffForHumans() }}</div>
                <div class="mr-3"><b>Updated: </b>{{ $thread->updated_at->diffForHumans() }}</div>
            </div>
            @foreach($thread->posts as $post)
                <div class="container mx-auto mb-10 second:rounded-t-lg">
                    <div class="w-full bg-gray-100 h-14 flex justify-between p-5 items-center">
                        <div class="flex justify-between items-center">
                            <img class="h-10 w-10 rounded-full mr-4"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                 alt="">
                            <div>
                                <div class="font-semibold m-0 p-0">{{ $post->user->name }}</div>
                                <div class="text-left">{{ $post->user->role }}</div>
                            </div>
                        </div>
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Active
                        </span>
                        <div>
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-gray-50 to-blue-50 p-5 text-left">
                        {!! $post->body !!}
                    </div>
                    <div class="flex bg-gray-100 pl-2 pr-2 justify-between">
                        @auth()
                            <x-link-button link="index" style="light" class="m-3">Send PM</x-link-button>
{{--                            <x-link-button link="index" style="light" class="m-3">Update</x-link-button>--}}
                            <div class="flex">
                                <form class="m-3" action="{{ route('post.destroy', $post) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-4 py-2 text-xs uppercase font-semibold border border-red-600 border-solid rounded text-red-600 bg-red-50 hover:bg-red-600 hover:text-white hover:border-red-600 hover:border-red-900 ease-in-out duration-300">
                                        Delete
                                    </button>
                                </form>
                                <x-link-button link="index" style="red" class="m-3">Report</x-link-button>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
            @auth()
                <form class="mb-3 pt-0" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="thread_id" name="thread_id" value="{{ $thread->id }}">
                    <label for="wysiwyg-editor">Answer</label>
                    <textarea class="form-control w-full" name="postBody" rows="10"></textarea>
                    <button
                        class="w-full justify-around mt-2 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-300">
                        Create Post
                    </button>
                </form>
            @endauth()
        </div>
    </main>
</x-guest-layout>

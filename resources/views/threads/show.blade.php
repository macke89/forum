<x-guest-layout>
    <div class="container col-span-7 col-start-2 md:w-4/6">
        <!-- THREAD -->
        <div class="mb-20">
            <!-- HEADER -->
            <div class="flex items-center justify-between w-full sm:h-16 p-2 text-white bg-blue-800 last:ml-auto">
                <div class="w-2/6">
                    @auth()
                        @if(auth()->id() == $thread->user_id)
                            <a class="px-4 py-2 font-bold text-center text-white duration-300 bg-green-300 border-2 border-green-300 rounded hover:bg-green-500 hover:border-2 hover:border-white"
                               type="submiit"
                               href="{{ route('thread.edit', $thread) }}">EDIT</a>
                        @else
{{--                            <a class="px-4 py-2 mb-2 font-bold text-center text-white duration-300 bg-blue-300 border-2 border-blue-300 rounded hover:bg-blue-500 hover:border-2 hover:border-white"--}}
{{--                               href="#">SEND PM</a>--}}
                        @endif
                    @endauth
                </div>
                <div class="w-2/6 text-center min-w-min">
                    <div class="text-xl font-bold">{{ $thread->title }}</div>
                    <div class="text-sm font-semibold">by {{ $thread->user->name }}</div>
                </div>
                <div class="w-2/6 text-right">
                    @auth()
                        @if(auth()->id() == $thread->user_id)
                            <form class="flex-col justify-around h-full" action="{{ route('thread.destroy', $thread) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"
                                        value="delete"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        @else
{{--                            <a class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"--}}
{{--                               href="#">REPORT</a>--}}
                        @endif
                    @endauth
                </div>
            </div>
            <!-- BODY -->
            <div class="p-2 border-l border-r border-blue-600 break-words">
                <p>{!! nl2br($thread->body) !!}</p>
            </div>
            <!-- FOOTER -->
            <div
                class="flex items-center justify-between w-full p-2 mb-5 text-white bg-blue-50 border-b border-l border-r border-blue-600">
                <div class="text-blue-900">Created: {{ $thread->created_at->diffForHumans() }}</div>
                <div class="text-blue-900">Updated: {{ $thread->updated_at->diffForHumans() }}</div>
            </div>
        </div>
        <!-- POSTS -->
        @forelse($posts as $post)
            @if($post->thread_id == $thread->id)
                <div class="mb-10">
                    <!-- HEADER -->
                    <div class="flex items-center justify-between w-full p-2 text-white bg-blue-700 sm:h-14">
                        <div class="w-2/6">
                            @auth()
                                @if(auth()->id() == $post->user_id)
                                    <a type="submit"
                                       href="{{ route('post.edit', $post) }}"
                                       class="px-4 py-2 font-bold text-center text-white duration-300 bg-green-300 border-2 border-green-300 rounded hover:bg-green-500 hover:border-2 hover:border-white">
                                        Edit
                                    </a>
                                @else
{{--                                    <a class="px-4 py-2 font-bold text-center text-white duration-300 bg-blue-300 border-2 border-blue-300 rounded hover:bg-blue-500 hover:border-2 hover:border-white"--}}
{{--                                       href="#">Send PM</a>--}}
                                @endif
                            @endauth
                        </div>
                        <div class="w-2/6 text-center">
                            by
                            <span class="font-bold">{{ $post->user->name }}</span>
                        </div>
                        <div class="w-2/6 text-right">
                            @auth()
                                @if(auth()->id() == $post->user_id)
                                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"
                                                value="delete"
                                                onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                @else
{{--                                    <a class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"--}}
{{--                                       href="#">Report</a>--}}
                                @endif
                            @endauth
                        </div>
                    </div>
                    <!-- BODY -->
                    <div>
                        <p class="p-2 border-l border-r border-blue-600 break-words">{!! nl2br($post->body) !!}</p>
                    </div>
                    <!-- FOOTER -->
                    <div
                        class="flex items-center justify-between w-full p-2 mb-5 text-white bg-blue-50 border-b border-l border-r border-blue-600">
                        <div class="text-blue-900">Created: {{ $post->created_at->diffForHumans() }}</div>
                        <div class="text-blue-900">Updated: {{ $post->updated_at->diffForHumans() }}</div>
                    </div>
                </div>
            @endif
        @empty
            <div class="flex justify-around w-full">
                No Answers Yet
            </div>
        @endforelse
        @auth()
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
            <form class="mb-3 pt-0" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="thread_id" name="thread_id" value="{{ $thread->id }}">
                <label for="postBody">Answer</label>
                <textarea id="postBody" class="form-control w-full @error('postBody') is-invalid @enderror" name="postBody" rows="10" required></textarea>
                <button
                    class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                    Create Post
                </button>
            </form>
        @endauth()
    </div>
</x-guest-layout>

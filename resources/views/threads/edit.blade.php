<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{--THREAD EDIT--}}
                <form
                    action="{{ route('thread.update', $thread) }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="flex flex-col m-10">
                    @method('PUT')
                    @csrf

                    {{--TITLE--}}
                    <label
                        for="title"
                        class="text-center">{{ __('Title') }}</label>
                    <input name="title"
                           id="title"
                           type="text"
                           class="@error('title') is-invalid @enderror" value="{{ $thread->title }}">

                    @error('title')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                    {{--CONTENT--}}
                    <label
                        for="body"
                        class="text-center">{{ __('Content') }}</label>
                    <textarea name="body" id="body" rows="10"
                              class="@error('body') is-invalid @enderror">{{ $thread->body }}</textarea>

                    @error('body')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Update Thread') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

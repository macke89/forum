<x-app-layout>
    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
        {{--THREAD EDIT--}}
        <form
            action="{{ route('thread.update', $thread) }}"
            method="POST"
            enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{--TITLE--}}
        <label for="title" class="font-semibold text-blue-900">{{ __('Title') }}</label>
        <input name="title" id="title" type="text" class="mb-4 block w-full mt-1 @error('title') is-invalid @enderror"
               value="{{ $thread->title }}">

        @error('title')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

        {{--CONTENT--}}
        <label for="body" class="font-semibold text-blue-900">{{ __('Content') }}</label>
        <textarea name="body" id="body" rows="10" class="block w-full mt-1 @error('body') is-invalid @enderror">{{ $thread->body }}</textarea>

        <div class="flex items-center justify-end mt-4">
            <button
                class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                Update Thread
            </button>
        </div>
        </form>
    </div>
</x-app-layout>

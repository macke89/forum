<x-app-layout>
    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
        {{--POST EDIT--}}
        <form
            action="{{ route('post.update', $post) }}"
            method="POST"
            enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{--CONTENT--}}
        <label for="body" class="font-semibold text-blue-900">{{ __('Content') }}</label>
        <textarea name="body" id="body" rows="10"
                  class="block w-full mt-1 @error('body') is-invalid @enderror">{{ $post->body }}</textarea>

        @error('body')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <div class="flex items-center justify-end mt-4">
            <button
                class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                Update Post
            </button>
        </div>
        </form>
    </div>
    </div>
    </div>
</x-app-layout>

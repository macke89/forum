<x-app-layout>
    @livewire('thread-create-form-validate')
{{--    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}
{{--        <!-- --}}{{--THREAD CREATE--}}{{-- -->--}}
{{--        <form method="POST" action="{{ route('thread.store') }}">--}}
{{--        @csrf--}}

{{--        <!--Title-->--}}
{{--            <div>--}}
{{--                <label class="font-semibold text-blue-900" for="title">Title</label>--}}
{{--                <input type="text" name="title" id="title"--}}
{{--                       class="block w-full mt-1 @error('title') is-invalid @enderror" value="{{ old('title') }}">--}}

{{--                <div class="mt-4">--}}
{{--                    <label class="font-semibold text-blue-900" for="category">Category</label>--}}
{{--                    <br/>--}}
{{--                    <select class="block mt-1 form-select" name="category" id="category">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!--CONTENT-->--}}
{{--            <div class="mt-4">--}}
{{--                <label class="font-semibold text-blue-900" for="body">Content</label>--}}

{{--                <textarea name="body"--}}
{{--                          id="body"--}}
{{--                          rows="15"--}}
{{--                          class="block w-full mt-1 @error('body') is-invalid @enderror">{{ old('body') }}</textarea>--}}
{{--            </div>--}}


{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <button--}}
{{--                    class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">--}}
{{--                    Create Thread--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
</x-app-layout>

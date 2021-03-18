<div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
{{--    <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}
<!-- {{--THREAD CREATE--}} -->
    <form wire:submit.prevent="createthread">
        @csrf

        <div>
            {{--TITLE--}}
            <label class="font-semibold text-blue-900 flex flex-row justify-between" for="title">
                <span>Title</span>
                @error('title')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
            <input wire:model="title" wire:keydown="validatetitle" type="text" name="title" id="title"
                   class="block w-full mt-1 @error('title') is-invalid @enderror">

            {{--CATEGORIES--}}
            <div class="mt-4">
                <label class="font-semibold text-blue-900 flex flex-row justify-between" for="category">
                    <span>Category</span>
                    @error('category')
                    <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
                <select wire:model="category" wire:click="validatecategory" class="block mt-1 form-select" name="category" id="category">
                    <option selected="selected">Please Choose a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!--CONTENT-->
        <div class="mt-4">
            <label class="font-semibold text-blue-900 flex flex-row justify-between" for="body">
                <span>Content</span>
                @error('body')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <textarea
                wire:model="body"
                wire:keydown="validatecontent"
                name="body"
                id="body"
                rows="15"
                class="block w-full mt-1 @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
        </div>


        <div class="flex items-center justify-end mt-4">
            <button
                class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                Create Thread
            </button>
        </div>
    </form>
</div>

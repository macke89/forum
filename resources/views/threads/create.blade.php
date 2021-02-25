<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{--THREAD CREATE--}}
                <form method="POST" action="{{ route('thread.store') }}" class="m-10">
                @csrf

                <!--Title-->
                    <div>
                        <x-label for="title" :value="__('Title')"/>

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                 required autofocus/>

                        <div class="mt-4">
                            <x-label for="category" :value="__('Category')"/>

                            <select name="category" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!--CONTENT-->
                    <div class="mt-4">
                        <x-label for="body" :value="__('Content')"/>

                        <textarea name="body" id="body" rows="15"
                                  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"></textarea>
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Create Thread') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

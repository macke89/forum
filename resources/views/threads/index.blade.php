<x-guest-layout>
    <main class="container w-full m-4 mx-auto my-16 text-center flex flex-col p-3">
        <!-- This example requires Tailwind CSS v2.0+ -->
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
                        <tr class="cursor-pointer hover:bg-blue-50 duration-300"
                            onclick="location.href = 'thread/{{ $thread->id }}'">
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
                                    <div class="ml-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $thread->user->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            Users Posts: {{ $thread->user->posts->count() }}
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
                                {{ $thread->user->role }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                Created: {{ $thread->created_at->diffForHumans() }}
                                <br/>
                                Last Answer:
                                @if($thread->posts->count() == 0)
                                    None
                                @else
                                    {{ $thread->posts->last()->created_at->diffForHumans() }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <!-- More items... -->
                    </tbody>
                @endforeach
            </table>
        </div>
    </main>
</x-guest-layout>

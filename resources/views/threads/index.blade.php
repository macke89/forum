<x-guest-layout>
    <!-- TABLE -->
    <table class="w-full table-fixed">
    @foreach($categories as $category)
        <!-- CATEGORY -->
            <thead class="text-left text-white bg-blue-700">
            <tr class="justify-between flex-1">
                <th class="w-1/3 p-3">{{ $category->name }}</th>
                <th class="hidden text-center sm:table-cell">Posted</th>
                <th class="text-center">Answers</th>
                <th class="text-center">Last Post</th>
            </tr>
            </thead>
            <!-- TABLE BODY -->
            <tbody>
            <!-- THREAD -->
            @foreach($category->threads as $thread)
                <tr
                    class="items-start justify-between flex-1 p-1 text-left transition-all border-l border-r border-blue-100 cursor-pointer hover:bg-blue-50 box-border even:bg-blue-100 border-b"
                    onclick="location.href = 'thread/{{ $thread->id }}'">
                    <td class="p-1 pl-3">
                        <div>{{ $thread->title }}</div>
                        <div>by <span class="font-semibold">{{ $thread->user->name }}</span></div>
                    </td>
                    <td class="hidden text-center sm:table-cell">{{ $thread->created_at->diffForHumans() }}</td>
                    <td class="text-center">{{ $thread->posts->count() }}</td>
                    <td class="text-center">{{ $thread->posts->last()->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        @endforeach
        {{--    <!-- TABLE FOOTER -->--}}
        {{--        <tfoot class="text-left text-white bg-blue-200">--}}
        {{--        <tr class="justify-between flex-1 p-1">--}}
        {{--            <th class="w-1/3 p-1 pl-3 font-semibold text-blue-900">{{ $threads->count() }} Threads</th>--}}
        {{--            <th class="hidden font-semibold text-center text-blue-900 sm:table-cell">Newest: {{ $threads->last()->created_at->diffForHumans() }}</th>--}}
        {{--            <th class="font-semibold text-center text-blue-900">Answers</th>--}}
        {{--            <th class="font-semibold text-center text-blue-900">Newest: {{ $posts->last()->created_at->diffForHumans() }}</th>--}}
        {{--        </tr>--}}
        {{--        </tfoot>--}}
    </table>

    <!-- SIDEBAR -->
    <div class="flex flex-col flex-initial max-w-md m-auto mt-16 mb-10 md:mt-0">
        <div class="bg-blue-50 p-5">
            <div class="flex flex-col">
                <!-- NEW THREAD -->
                <a class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700"
                   href="#">New
                    Thread</a>
                <!-- MOST RECEN POSTS -->
                <div class="w-full mb-2 overflow-hidden border-t tab">
                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                    <label
                        class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
                        for="tab-single-one">
                        Most Recent
                    </label>
                    <div class="overflow-hidden leading-normal bg-white tab-content">
                        <div class="p-3">
                            Title <br>
                            Date
                        </div>
                        <hr>
                        <div class="p-3">
                            Title <br>
                            Date
                        </div>
                    </div>
                </div>
                <!-- MOST POPULAR POSTS -->
                <div class="w-full mb-10 overflow-hidden border-t tab">
                    <input class="absolute opacity-0" id="tab-popular-one" type="radio" name="tabs2">
                    <label
                        class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
                        for="tab-popular-one">
                        Most Popular
                    </label>
                    <div class="overflow-hidden leading-normal bg-white tab-content">
                        <div class="p-3">
                            Title <br>
                            Date
                        </div>
                        <hr>
                        <div class="p-3">
                            Title <br>
                            Date
                        </div>
                    </div>
                </div>
            </div>
            <!-- STATISTICS -->
            <div>
                <h5 class="pl-2 mb-5 text-2xl font-bold text-blue-900 bg-white border-l-4 border-blue-900">Forum
                    Statistics</h5>
                <ul>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Members:</div>
                        <div class="font-semibold">{{ $users->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Threads:</div>
                        <div class="font-semibold">{{ $threads->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl border-b-2 border-white">
                        <div class="font-bold">Posts:</div>
                        <div class="font-semibold">{{ $posts->count() }}</div>
                    </li>
                    <li class="flex justify-between p-2 text-xl">
                        <div class="font-bold">Reports:</div>
                        <div class="font-semibold">{{ $reports->count() }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>

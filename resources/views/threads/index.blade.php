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
</x-guest-layout>

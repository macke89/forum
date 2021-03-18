<!-- SIDEBAR -->
<div class="flex flex-col flex-initial max-w-md m-auto mt-16 md:mt-0 md:w-2/6">
    <div class="bg-blue-50 p-5">
        <div class="flex flex-col">
        @auth()
            <!-- NEW THREAD -->
                <a class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300 transform hover:scale-105"
                   href="{{ route('thread.create') }}">
                    New Thread
                </a>
        @endauth
        <!-- MOST RECENT THREADS -->
            <div class="w-full mb-2 overflow-hidden border-t tab">
                <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                <label
                    class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700 transition-all duration-300"
                    for="tab-single-one">
                    Most Recent
                </label>
                <div class="overflow-hidden leading-normal bg-white tab-content">
                    @foreach($mostRecentThreads as $thread)
                        <div class="p-3 border-b-2 border-blue-50 flex flex-col justify-between">
                            <div>{{ $thread->title }}</div>
                            <div>{{ $thread->created_at->diffForHumans() }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- MOST POPULAR THREADS -->
            <div class="w-full mb-10 overflow-hidden border-t tab">
                <input class="absolute opacity-0" id="tab-popular-one" type="radio" name="tabs2">
                <label
                    class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-500 rounded cursor-pointer hover:bg-blue-700 transition-all duration-300"
                    for="tab-popular-one">
                    Most Popular
                </label>
                <div class="overflow-hidden leading-normal bg-white tab-content">
                    @foreach($mostPopularThreads as $thread)
                        <div class="p-3 border-b-2 border-blue-50 flex flex-row justify-between">
                            <div>{{ $thread->title }}</div>
                            <div>{{ $thread->posts->count() }}</div>
                        </div>
                    @endforeach
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

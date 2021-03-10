<x-app-layout>
    <div class="container">

        <!-- MEMBERS -->
        <div class="w-full mb-2 overflow-hidden border-t tab">
            <input class="absolute opacity-0" id="tab-member-one" type="radio" name="tabs2">
            <label
                class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-800 cursor-pointer hover:bg-blue-700"
                for="tab-member-one">
                Members
            </label>
            <div class="overflow-hidden leading-normal bg-white tab-content">
                <ul class="border border-blue-800 w-full">
                    <li class="flex justify-between p-2 font-bold border-b border-blue-100 w-full">
                        <div class="w-1/4">NAME</div>
                        <div class="w-1/4 text-center">THREADS</div>
                        <div class="w-1/4 text-center">POSTS</div>
                        <div class="w-1/4 text-right w-1/5">REPORTS</div>
                    </li>
                    @foreach($users as $user)
                        <li class="flex justify-between p-2 border-b border-blue-100 w-full">
                            <div class="w-1/4">{{ $user->name }}</div>
                            <div class="w-1/4 text-center">{{ $user->threads->count() }}</div>
                            <div class="w-1/4 text-center">{{ $user->posts->count() }}</div>
                            <div class="w-1/4 text-right w-1/5">{{ $user->reports->count() }}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- REPORTS -->
        <div class="w-full mb-2 overflow-hidden border-t tab">
            <input class="absolute opacity-0" id="tab-reports-one" type="radio" name="tabs2">
            <label
                class="block p-2 font-bold leading-normal text-center text-white transition-all bg-blue-800 cursor-pointer hover:bg-blue-700"
                for="tab-reports-one">
                Reports
            </label>
            <div class="overflow-hidden leading-normal bg-white tab-content">
                <ul class="border border-blue-800">
                    <li class="flex justify-between p-2 font-bold border-b border-blue-100 w-full">
                        <div class="w-1/4">Body</div>
                        <div class="w-1/4 text-center">Thread/Post</div>
                        <div class="w-1/4 text-center">Reported</div>
                        <div class="w-1/4 text-right w-1/5">Report Author</div>
                    </li>
                    @foreach($reports as $report)
                        <li class="flex justify-between p-2 border-b border-blue-100 w-full">
                            <div class="w-1/4">{{ Illuminate\Support\Str::limit($report->body, 20) }}</div>
                            <div class="w-1/4 text-center">{{ $report->post->thread->title }}</div>
                            <div class="w-1/4 text-center">{{ $report->post->user->name }}</div>
                            <div class="w-1/4 text-right w-1/5">{{ $report->user->name }}</div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

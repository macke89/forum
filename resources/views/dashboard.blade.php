<x-app-layout>
    <div class="w-full">

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
                        <div class="w-1/3">In Thread</div>
                        <div class="w-1/3 text-center">Posted by</div>
                        <div class="w-1/3 text-right">Reported by</div>
                    </li>
                    @foreach($reports as $report)
                        <a href="{{ route('report.show', $report) }}">
                            <li class="flex justify-between p-2 border-b border-blue-100 w-full transition-all duration-300 hover:bg-blue-50">
                                <div class="w-1/3">{{ $report->post->thread->title }}</div>
                                <div class="w-1/3 text-center">{{ $report->post->user->name }}</div>
                                <div class="w-1/3 text-right">{{ $report->user->name }}</div>
                            </li>
                        </a>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

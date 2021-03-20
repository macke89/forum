<x-app-layout>
    <div class="w-full">
        <div class="mb-10">
            <div class="flex items-center justify-between w-full p-2 text-white bg-blue-900 sm:h-14">
                <div class="text-center text-xl p-3 text-white">
                    Reported by: <span class="font-bold">{{ $report->user->name }}</span>
                </div>
                <form action="{{ route('report.cancel', $report) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"
                            value="delete"
                            onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </div>
            <div class="p-2 border-l border-r border-blue-600 break-words">
                <p>{!! nl2br($report->body) !!}</p>
            </div>
            <!-- HEADER -->
            <div class="flex items-center justify-between w-full p-2 text-white bg-blue-700 sm:h-14">
                <div class="w-2/6">
                    {{--                                    <a class="px-4 py-2 font-bold text-center text-white duration-300 bg-blue-300 border-2 border-blue-300 rounded hover:bg-blue-500 hover:border-2 hover:border-white"--}}
                    {{--                                       href="#">Send PM</a>--}}
                </div>
                <div class="w-2/6 text-center">
                    Posted by: <span class="font-bold">{{ $report->post->user->name }}</span>
                </div>
                <div class="w-2/6 text-right">
                    <form action="{{ route('report.destroy', $report) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 font-bold text-center text-white duration-300 bg-red-400 border-2 border-red-400 rounded hover:bg-red-700 hover:border-2 hover:border-white"
                                value="delete"
                                onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <!-- BODY -->
            <div class="p-2 border-l border-r border-blue-600 break-words">
                <p>{!! nl2br($report->post->body) !!}</p>
            </div>
            <!-- FOOTER -->
            <div
                class="flex items-center justify-between w-full p-2 mb-5 text-white bg-blue-50 border-b border-l border-r border-blue-600">
                <div class="text-blue-900">Created: {{ $report->post->created_at->diffForHumans() }}</div>
                <div class="text-blue-900">Updated: {{ $report->post->updated_at->diffForHumans() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>

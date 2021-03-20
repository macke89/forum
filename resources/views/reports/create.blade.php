<x-app-layout>
    <div class="w-full p-5 overflow-hidden shadow-sm bg-blue-50">
        <!-- THREAD CREATE -->
        <form method="POST" action="{{ route('report.store') }}">
        @csrf
        <!--CONTENT-->
            <div>
                <label class="font-semibold text-blue-900" for="body">Reason</label>
                <textarea name="body"
                          id="body"
                          rows="15"
                          class="block w-full mt-1 @error('body') is-invalid @enderror"></textarea>
            </div>
            <input type="hidden" name="post_id" value="{{ $post }}">
            <div class="flex items-center justify-end mt-4">
                <button
                    class="w-full px-4 py-2 mb-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700 transition-all duration-300">
                    Create Report
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

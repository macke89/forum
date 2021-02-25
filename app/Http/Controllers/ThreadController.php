<?php

    namespace App\Http\Controllers;

    use App\Models\Category;
    use App\Models\Thread;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class ThreadController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $categories = Category::all();
            $threads = Thread::all();
            return view('threads.index', compact('categories', 'threads'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $categories = Category::all();
            return view('threads.create', compact('categories'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $thread = Thread::create([
                'title' => $request->title,
                'user_id' => Auth::user()->id,
                'category_id' => $request->category,
                'body' => $request->body
            ]);

            return redirect()->route('thread.show', $thread);
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\Thread $thread
         * @return \Illuminate\Http\Response
         */
        public function show(Thread $thread)
        {
            return view('threads.show', compact('thread'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Thread $thread
         * @return \Illuminate\Http\Response
         */
        public function edit(Thread $thread)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Thread $thread
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Thread $thread)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Thread $thread
         * @return \Illuminate\Http\Response
         */
        public function destroy(Thread $thread)
        {
            //
        }
    }

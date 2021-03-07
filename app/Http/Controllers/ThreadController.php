<?php

    namespace App\Http\Controllers;

    use App\Models\Category;
    use App\Models\Post;
    use App\Models\PostVote;
    use App\Models\Report;
    use App\Models\Thread;
    use App\Models\User;
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
//            $threads = Thread::all();
//            $posts = Post::all();
//            $users = User::all();
//            $reports = Report::all();
            return view('threads.index', compact('categories'));
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
            return view('threads.edit', compact('thread'));
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
            $thread->update([
                'title' => $request->title,
                'body' => $request->body
            ]);
            return view('threads.show', compact('thread'));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Thread $thread
         * @return \Illuminate\Http\Response
         */
        public function destroy(Thread $thread)
        {
            if ($thread->user_id != auth()->id()) {
                abort(403);
            }

            $posts = Post::where('thread_id', intval($thread->id));
            $post_array = array();
            foreach ($posts as $post_id) {
                array_push($post_array, $post_id->id);
            }
            $votes = PostVote::whereIn('post_id', $post_array);
            $reports = Report::whereIn('post_id', $post_array);

            $votes->delete();
            $reports->delete();
            $posts->delete();
            $thread->delete();
            $categories = Category::all();

            return view('threads.index', compact('categories'));
        }
    }

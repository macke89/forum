<?php

    namespace App\Http\Controllers;

    use App\Models\Post;
    use App\Models\report;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class ReportController extends Controller {

        public $post_id;

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create( $post ) {
            return view( 'reports.create', compact( 'post' ) );
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store( Request $request ) {
            Report::create( [
                'body'    => $request->body,
                'post_id' => $request->post_id,
                'user_id' => auth()->id(),
            ] );

            return view( 'dashboard' );
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\report $report
         *
         * @return \Illuminate\Http\Response
         */
        public function show( report $report ) {
            return view( 'reports.show', compact( 'report' ) );
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\report $report
         *
         * @return \Illuminate\Http\Response
         */
        public function edit( report $report ) {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\report $report
         *
         * @return \Illuminate\Http\Response
         */
        public function update( Request $request, report $report ) {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\report $report
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy( report $report ) {
            $post = $report->post;
            $post->delete();
            $report->delete();

            return redirect()->route( 'dashboard' );
        }

        public function cancel( report $report ) {
            $report->delete();

            return redirect()->route( 'dashboard' );
        }
    }

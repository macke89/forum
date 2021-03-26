<?php

    use Illuminate\Support\Facades\Route;
    use \App\Http\Controllers\ThreadController;
    use App\Http\Controllers\PostController;
    use \App\Http\Controllers\ReportController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get( '/', [ ThreadController::class, 'index' ] )->name( 'index' );


    Route::group( [ 'middleware' => [ 'auth', 'verified' ] ], function () {
        Route::resource( 'thread', ThreadController::class )->except( 'index' );
        Route::resource( 'post', PostController::class );
        Route::resource( 'report', ReportController::class )->except( 'create' );
        Route::delete( 'report/cancel/{report}', [ ReportController::class, 'cancel' ] )->name( 'report.cancel' );
        Route::get( 'report/create/{post}', [ ReportController::class, 'create' ] )->name( 'report.create' );

        Route::get( '/dashboard', function () {
            return view( 'dashboard' );
        } )->name( 'dashboard' );
    } );

    Route::get( '/dashboard', function () {
        return view( 'dashboard' );
    } )->name( 'dashboard' );

    require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/realtime-with-vue', 'realtime-with-vue');
Route::view('/realtime-with-javascript', 'realtime-with-javascript');

Route::get('/test-broadcast', function () {
    event(new \App\Events\SampleEvent());
    return 'Event fired.';
});

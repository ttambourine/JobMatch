<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Tag;
use App\Job;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list_tags', function() {
	$tags = Tag::all();

	return json_encode($tags);
});

Route::get('/list_jobs', function() {
	$jobs = Job::all();

	return json_encode($jobs);
});

Route::get('/job_info/{id}', function($id) {
	$job = Job::findOrFail( $id );

	return json_encode($job);
});

Route::get('/user_info', function($id){
	$user = User::findOrFail( Auth::id() );

	return json_encode($user);
})->middleware('auth:api');;
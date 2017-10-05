<?php

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

//Route::get('/', function () { return view('welcome'); });
//Route::get('/login', function () { return view('login'); });
//Route::get('/createjob', function () { return view('createjob'); });

Route::get('/faq', function () { return view('faq'); });
Route::get('/contact', function () { return view('contact'); });
Route::middleware('auth')->get('/profile', function () { return view('profile'); });
Route::get('/about', function () { return view('about'); });
Route::middleware('auth')->get('/preferences', function () { return view('preferences'); });
//Route::get('/register', function () { return view('register'); });

Route::middleware('auth')->get('/browse', function () { return view('browse'); });
Route::middleware('auth')->get('/match', function () { return view('match'); });
Route::middleware('auth')->get('/selectjob', function () { return view('selectjob'); });

//Route::get('/hometest', function() { return view('home'); });
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('welcome');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('createjob', 'JobController@showCreationForm')->name('createjob');
Route::post('createjob', 'JobController@store');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');




// 

// CHANGE
use App\User;
use App\Job;
Route::middleware('auth')->get('/get_matches/{$id}', function($id) {

	if ( Auth::check() ) {
		$user = Auth::user();
		$jobs = Job::all();

		$finalJobs = array();
		$i = 0;
		foreach($jobs as $job) {
			$jobArray = $job;
			$score = 0;

			if (isset($user['tag1']) && isset($job['tag1']) && $user['tag1'] == $job['tag1'])
				$score += 2;

			if (isset($user['tag2']) && isset($job['tag2']) && $user['tag2'] == $job['tag2'])
				$score += 1;

			if (isset($user['tag3']) && isset($job['tag3']) && $user['tag3'] == $job['tag3'])
				$score += 1;

			$distance = distance($user['lat'], $user['lng'], $job['lat'], $job['lng'], 'K');

			if ($distance < 20)
				$score += 2;
			else if ($distance > 20 && $distance < 50)
				$score += 1;
			else if ($distance > 50 && $distance < 100)
				$score += 0.5;
			else
				$score -= 2;

			$jobArray['score'] = $score;
			$jobArray['distance'] = $distance;
			$finalJobs[$i++] = $job;
		}

		return json_encode($finalJobs);
	}
});

function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
    return ($miles * 0.8684);
  } else {
    return $miles;
  }
}
/*


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/
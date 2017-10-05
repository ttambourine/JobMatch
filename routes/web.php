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
//Route::middleware('auth')->post('update_acc', 'Auth\RegisterController@update');

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
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
Route::middleware('auth')->post('update_acc', function(Request $request){

	$data = $request->all();
	Validator::make( $data, [
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'tag1' => 'required',
        'lat' => 'required',
        'lng' => 'required',
    ]);

    User::find( Auth::user()->id )->update( $request->all() );
    return Redirect::to('preferences')->with('success', 'Data updated successfully');
});
Route::middleware('auth')->get('/api/get_matches/{id}', function($id) {

	if ( Auth::check() ) {
		$user = Auth::user();
		$jobs = Job::all();

		$finalJobs = array();
		$i = 0;
		foreach($jobs as $job) {
			$jobArray = $job;
			$score = 0;
			$distances = 0;
			$tag = 0;

			if (isset($user['tag1']) && isset($job['tag1']) && $user['tag1'] == $job['tag1']) {
				$score += 2;
				$tag = 10;
			}

			if (isset($user['tag2']) && isset($job['tag2']) && $user['tag2'] == $job['tag2']) {
				$score += 1;
				$tag += 5;
			}

			if (isset($user['tag3']) && isset($job['tag3']) && $user['tag3'] == $job['tag3']) {
				$score += 1;
				$tag += 1;
			}

			$distance = distance($user['lat'], $user['lng'], $job['lat'], $job['lng'], 'K');

			if ($distance < 20) {
				$score += 2;
				$distances = 10;
			}
			else if ($distance > 20 && $distance < 50) {
				$score += 1;
				$distances = 5;
			}
			else if ($distance > 50 && $distance < 100) {
				$score += 0.5;
				$distances = 2;
			}
			else {
				$score -= 2;
				$distances = 0;
			}

			$jobArray['score'] = $score;
			$jobArray['distance'] = $distance;
			$jobArray['distances'] = $distances; // score for distances
			$finalJobs[$i++] = $jobArray;
		}
		$finalJobs = json_decode(json_encode($finalJobs), True);
		if($id == "1") {
			//print_r($finalJobs);
			$finalJobs = array_sort_($finalJobs, 'amount');
			//print("\n");
			//print_r($finalJobs);
			//print("AMOUNT");
		}else if ($id == "2") {
			$finalJobs = array_sort_($finalJobs, 'distance');
			//print("DISTANCE");
		}else if ($id == "3") {
			$finalJobs = array_sort_($finalJobs, 'score');
			//print("SCORE");
		}

		$finalJobs2 = array();
		$newi = 0;
		foreach($finalJobs as $job) {
			$finalJobs2[$newi++] = $job;
		}
		return json_encode($finalJobs2);
	}
});

Route::middleware('auth')->get('/api/get_info', function() {
	$user = Auth::user();

	return json_encode($user);
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

function array_sort_($array, $on, $order=SORT_DESC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
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
<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        Tag::findOrFail( $data['tag1'] );
        if (isset($data['tag2'])) { Tag::findOrFail( $data['tag2'] ); }
        if (isset($data['tag3'])) { Tag::findOrFail( $data['tag3'] ); }

        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'tag1' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $array = [
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mobile' => $data['mobile'],
            'address' => $data['formatted_address'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tag1' => $data['tag1'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'about' => $data['about'],
        ];

        if (isset($data['tag2'])) { $array['tag2'] = $data['tag2']; }
        if (isset($data['tag3'])) { $array['tag3'] = $data['tag3']; }

        return User::create($array);

        //return redirect()->route('welcome')->with('success', 'Account created successfully.');
    }

    public function update(Request $request) {
        $this->validate( $request, [
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mobile' => $data['mobile'],
            'address' => $data['formatted_address'],
            'email' => $data['email'],
            'tag1' => $data['tag1'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'about' => $data['about'],
        ]);

        User::find( Auth::user()->$id )->update( $request->all() );
        return redirect()->route('preferences')->with('success', 'Data updated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Input;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();
class VolunteerController extends Controller
{

	public function login()
    {
    	$message = "";
        $email = Input::get('email');
        $user = DB::table('volunteer')->where('email', $email);
        if($user)
        {
            $password = Input::get('password');
            $dbpass = DB::table('volunteer')->where('email', $email)->value('password');
            if($password == $dbpass)
            {
                $_SESSION['volunteer']=$email;
                return redirect('volunteer/home');
            }
            else
                $message = "Invalid password!";
        }
        else
            $message = "Invalid email!";
        return redirect('volunteer')->with('message', $message);

    }

    public function display()
    {
    	return view('volunteer.login')->with('message', '');
    }

    public function index()
    {
    	//display volunteer history
    }

    public function update()
    {
    	//update volunteer profile
    }

    public function task()
    {
    	//view accepted tasks
    }

    public function request()
    {
    	//view pending task requests
    }

    public function register()
    {
        $message = '';
        $name = Input::get('name');
        $email = Input::get('email');
        $pass = Input::get('password');
        $cpass = Input::get('confirm_password');
        $address = Input::get('address');
        $pincode = Input::get('pincode');        

        $duplicate = DB::table('volunteer')->where('email','=', $email)->get();
        if($duplicate)
        {
            $message = 'Email is already registered!';
            return redirect()->back();
        }
        if(strcmp($pass,$cpass))
        {
            $message = "Passwords do not match!";
            return redirect('/');
        }

        $apiToken = 'AIzaSyBoUdAJb9cRUfXUn7DMDv56xHyGLzbETtc';

        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url = $url . $address . ',' . $pincode  . ',' . 'India';
        $url = $url . '&' . 'key=' . $apiToken;
        $url = str_replace(' ', '+', $url);

        $response = file_get_contents($url);
        $response = json_decode($response, true);

        if($response['results'])
        {
            $lat = $response['results'][0]['geometry']['location']['lat'];
            $lng = $response['results'][0]['geometry']['location']['lng'];
        }
        else 
            return redirect()->back();

        $email = Input::get('email');
        DB::table('volunteer')->insert(
            ['name' => $name,'email' => $email,'password' => $pass, 'address' => $address, 'latitude' => $lat, 'longitude' => $lng]
        );

        Mail::send('email.register', ['name' => $name], function ($message) 
        {
            $email = Input::get('email');
            $message->to($email);
            $message->subject('Volunteer registration');
        });

        return redirect('/');
    }
}

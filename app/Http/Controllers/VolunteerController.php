<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
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
    	//login form for volunteer
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
}

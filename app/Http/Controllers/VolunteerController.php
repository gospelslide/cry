<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VolunteerController extends Controller
{
	public function login()
    {
    	$email = Input::get('email');

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

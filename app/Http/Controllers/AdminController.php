<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login()
    {
    		$email = Input::get('email');

    }

    public function display()
    {
    		//login form for admin
    }

    public function index()
    {
    		//display donations on homepage
    }

    public function update()
    {
    		//update admin profile
    }

    public function volunteer()
    {
    		//approve volunteer request
    }

    public function meal()
    {
    		//get meal suggestions
    }

    public function approve()
    {
    		//approve donation request
    }

    public function requirement()
    {
    		//update cry center requirements
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
	public function login()
    {
    	$email = Input::get('email');

    }

    public function display()
    {
    	//login form for donor
    }

    public function index()
    {
    	//display requirements of cry center
    }

    public function update()
    {
    	//update donor profile
    }

    public function donate()
    {
    	//donate
    }

    public function status()
    {
    	//get donations history and current donation status
    }

}

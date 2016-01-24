<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
	public function display()
    {

    }

    public function validate()
    {
        $apiToken = 'AIzaSyBoUdAJb9cRUfXUn7DMDv56xHyGLzbETtc';

        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url = $url . Input::get('apartment') . ',' . Input::get('locality') . ',' . Input::get('city') . ',' . Input::get('pincode')  . ',' . 'India';
        $url = $url . '&' . 'key=' . $apiToken;
        $url = str_replace(' ', '+', $url);

        $response = file_get_contents($url);
        $response = json_decode($response, true);

        $lat = $response['results'][0]['geometry']['location']['lat'];
        $lng = $response['results'][0]['geometry']['location']['lng'];

        $name = Input::get('name');
        $email = Input::get('email');
        $item = Input::get('food');
        $qty = Input::get('quantity');

        
    }

}

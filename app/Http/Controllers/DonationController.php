<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Mail;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
	public function display()
    {
        return view('donate');
    }

    public function submit()
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
        $item = Input::get('item');
        $qty = Input::get('quantity');
        $address = '';
        $address =  $address . Input::get('apartment') . ',' . Input::get('locality') . ',' . Input::get('city') . ',' . Input::get('pincode')  . ',' . 'India';

        DB::table('donation')->insert(
            ['donor_name' => $name,'donor_email' => $email, 'donor_address' => $address, 'donor_latitude' => $lat, 'donor_longitude' => $lng, 'item' => $item, 'quantity' => $qty]
        );

        Mail::send('email.donate', ['name' => $name], function ($message) 
        {
            $email = Input::get('email');
            $message->to($email);
        });

        return redirect('donate');
    }

    public function contact()
    {
        return view('contact');
    }

}

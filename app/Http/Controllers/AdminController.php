<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();
class AdminController extends Controller
{

    public function login()
    {
    	$message = "";
    	$email = Input::get('email');
    	$user = DB::table('admin')->where('email', $email);
    	if($user)
    	{
    		$password = Input::get('password');
    		$dbpass = DB::table('admin')->where('email', $email)->value('password');
    		if($password == $dbpass)
    		{
    			$_SESSION['admin']=$email;
    			return redirect('admin/home');
    		}
    		else
    			$message = "Invalid password!";
    	}
    	else
    		$message = "Invalid email!";
    	return redirect('admin')->with('message', $message);
    }

    public function display()
    {
    	return view('admin.login')->with('message', '');
    }

    public function index()
    {
    	if(isset($_SESSION['admin']))
    	{
	    	$donations = DB::table('donation')
	    					->join('donation_items', 'donation.id', '=', 'donation_items.donation_id')->get();
    	    return redirect('/');
		}
		else
			return redirect('admin');   
	}

    public function volunteer()
    {
    	$requests = DB::table('volunteer')->where('status', '0')->get();
    	return 0;
    }

    public function meal()
    {
    	//get meal suggestions
    }

    public function distance($lat1, $lon1, $lat2, $lon2) 
    {

  		$theta = $lon1 - $lon2;
 		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  		$dist = acos($dist);
  		$dist = rad2deg($dist);
  		$miles = $dist * 60 * 1.1515;
  		$distance = $miles*1.609344;

  		return $distance;
	}


    public function approve()
    {
      $result = DB::select('select * from volunteer where status = 1');
      $email=$_SESSION['admin'];
      $admin_location=DB::table('admin')
                     ->select(DB::raw('latitude,longitude'))
                     ->where('email', '=', $email)
                     ->first();
     
      $admin_lat=$admin_location->latitude;
      $admin_lon=$admin_location->longitude;
      $proximity=[];
      $distance=[];
      foreach($result as $value)
      {
        $temp = $value->id;
        $proximity[$temp]=$this->distance($admin_lat,$admin_lon,$value->latitude,$value->longitude);
        $distance[]=$this->distance($admin_lat,$admin_lon,$value->latitude,$value->longitude);
      }
      asort($proximity);
      asort($distance);
      $volunteer=[];
      $count=0;
      foreach($proximity as $key=>$value)
      {
        $volunteer[] = DB::table('volunteer')
                     ->select(DB::raw('*'))
                     ->where('id', '=', $key)
                     ->get()[0];
      }
      return view('admin.viewDetails')->with('volunteer',$volunteer)->with('distance',$distance);
    }

    public function requirement()
    {
    	//update cry center requirements
    }

    public function logout()
    {
    	session_destroy();
    	return redirect('admin');
    }
}

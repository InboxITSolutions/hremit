<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Response;
use App\Zone;
use App\Place;
use App\District;
use App\Agent;
class DatabaseController extends Controller{

	public function index(){
		/*$users = new Users;
		$users ->name ="John";
		$users ->email ='john@gmail.com';
		$users ->password =bcrypt('john');
		$users ->save();
*/
		$zone = Zone::all();
		return view('web.pages.agents',compact('zone'));

		/*return view('admin.dashboard');*/
	}
	public function getDistrict(){
		
		$zone_id = Input::get('zone_id');
		$district = District::where('zone_id','=',$zone_id)->get();

		return Response::json($district);
	}
	public function getRegion(){
		
		$dis_id = Input::get('dis_id');
		$place = Place::where('dis_id','=',$dis_id)->get();

		return Response::json($place);
	}
	public function getAgent(){
		
		$p_id = Input::get('p_id');
		$agent = Agent::where('p_id','=',$p_id)->get();

		return Response::json($agent);
	}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
class AgencyController extends Controller
{
	 public function showAgencies()
    {

    		$allAgencies=Agency::all();
			return view('admin.agencies',compact('allAgencies'));
    }



	public function store(Request $request) 
	{


		if (Input::file('agency_logo')->isValid()) {
			$destinationPath = 'uploads'; // upload path
			$extension = Input::file('agency_logo')->getClientOriginalExtension(); // getting logo_image extension
			$fileName = rand().'.'. $extension; // renameing logo_image
			Input::file('agency_logo')->move($destinationPath, $fileName);
		}
		$agen=new Agency;
		$agen->name=$request->agency_name;
		$agen->img=$fileName;
		$agen->address=$request->agency_address;
		$agen->email=$request->agency_email;
		$agen->website=$request->agency_website;
		$agen->phone1=$request->agency_phone1;
		$agen->phone2=$request->agency_phone2;
		$agen->mobile1=$request->agency_mobile1;
		$agen->mobile2=$request->agency_mobile2;
		$agen->password=$request->agency_pass;
		$agen->license=$request->agency_license;
//			 $agen=array_values($request->all());
		$agen->save();
//			 return $agen;
		return redirect('admin/agencies');
	}

    
}

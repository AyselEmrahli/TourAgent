<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;
use App\Http\Requests;
use DB;
use \Input as Input;
class AgencyController extends Controller
{
	 public function showAgencies()
    {

    		$allAgencies=Agency::all();
			return view('admin.agencies',compact('allAgencies'));
    }



	public function store(Request $request) 
	{

		$agen=new Agency;
		$agen->name=$request->agency_name;
		$agen->img=$request->agency_logo;
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

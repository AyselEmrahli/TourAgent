<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Agency extends Model
{
   protected $fillable=['name','img','address','email','website','phone1','phone2','mobile1','mobile2','password','license'];



public function addAgency()
{
	if (Input::file('agency_logo')->isValid()) {
			$destinationPath = 'uploads'; // upload path
			$extension = Input::file('agency_logo')->getClientOriginalExtension(); // getting logo_image extension
			$fileName ='\uploads\\'.rand().'.'. $extension; // renameing logo_image
			Input::file('agency_logo')->move($destinationPath, $fileName);
		}
		$agency=new Agency;
		$agency->name=Input::get('agency_name');
		$agency->img=$fileName;
		$agency->address=Input::get('agency_address');
		$agency->email=Input::get('agency_email');
		$agency->website=Input::get('agency_website');
		$agency->phone1=Input::get('agency_phone1');
		$agency->phone2=Input::get('agency_phone2');
		$agency->mobile1=Input::get('agency_mobile1');
		$agency->mobile2=Input::get('agency_mobile2');
		$agency->password=Input::get('agency_pass');
		// $agency->license=Input::get('agency_license');
		$agency->save();
		
	}

	 public function updateAgency($id)
	 {

	 		$tour = Agency::find($id);
	 		$upAgency = Agency::find($id);

	 		if (Input::file('agency_logo')->isValid()) {
	 			$destinationPath = 'uploads'; // upload path
	 			$extension = Input::file('agency_logo')->getClientOriginalExtension(); // getting logo_image extension
	 			$fileName = '\uploads\\'.rand().'.'. $extension; // renameing logo_image
	 			Input::file('agency_logo')->move($destinationPath, $fileName);
	 		}
	 		$upAgency->name=Input::get('agency_name');
	 		$upAgency->img=$fileName;
	 		$upAgency->address=Input::get('agency_address');
	 		$upAgency->email=Input::get('agency_email');
	 		$upAgency->website=Input::get('agency_website');
	 		$upAgency->phone1=Input::get('agency_phone1');
	 		$upAgency->phone2=Input::get('agency_phone2');
	 		$upAgency->mobile1=Input::get('agency_mobile1');
	 		$upAgency->mobile2=Input::get('agency_mobile2');
	 		$upAgency->password=Input::get('agency_pass');
	 		// $agency->license=Input::get('agency_license');
	 		$upAgency->update();
			

	 	}
	

}
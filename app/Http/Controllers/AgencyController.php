<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Agency;
use Illuminate\Support\Facades\Input;
//use DB;
class AgencyController extends Controller
{
	 public function showAgencies()
    {

    		$allAgencies=Agency::all();
			return view('admin.agencies',compact('allAgencies'));
    }


	public function showAgency($id)
	{
		$agenc = Agency::find($id);
		return view('admin.agency',compact('agenc'));
	}

	public function deleteAgency($id)
	{
		$agenc = Agency::find($id)->delete();
		return redirect('admin/agencies');

	}

	public function showAddAgency()
	{

	return view('admin.addAgency');

	}


	public function store(Agency $agency)
	{

		$agency->addAgency();
		return redirect('admin/agencies');
    
}

	

	// public function showEdit($id)
	// {	

	// }

public function Showedit($id)
	{

		$upAgency = Agency::where('id',$id)->first();
		return view('admin.editAgency',compact('upAgency'));

}

 	public function update($id, Agency $agency)
	{
		$agency->updateAgency($id);
		return redirect('admin/agencies');
	}
		
}
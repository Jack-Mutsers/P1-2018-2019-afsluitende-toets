<?php

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller; 
use App\Http\Requests\StoreStudentPost;
use App\klasgenoot_Model; 
use Illuminate\Http\Request; 

class Project_Controller extends Controller 
{ 
	public function getIndex() 
	{  
		$klasgenoten = klasgenoot_Model::all();
		return view('overzicht', ['klasgenoten' => $klasgenoten]);
	} 
	
	public function addklasgenoot()
	{
		return view('newklasgenoot');
	}
	
	public function addnew(StoreStudentPost $request) 
	{ 
		$naam = $request->input('name');
		$gemiddelde = (float)$request->input('average');
		$sex = $request->input('sex');
		//dd($gemiddelde);
		$item = klasgenoot_Model::create([
				'name' => $naam,
				'average' => $gemiddelde,
				'sex' => $sex
			]);
		
		return redirect('/');
	} 

	public function klasgenootInfo(Request $request)
	{
		$naam = $request->input('name');
		$details = klasgenoot_Model::all()->where('name', $naam);
		//dd($details);
		return view('klasgenoot', array('details' => $details));
	}
	
	public function verwijder(Request $request)
	{
		$id = $request->input('id');
		//Speler_Model::destroy($id);
		klasgenoot_Model::where('id', '=', $id)->delete();
		
		return redirect('/');
	}
	
	public function ajax(Request $request) 
	{  
		$position= $request->position;
		$spelers = klasgenoot_Model::all();
		$trashedklasgenoten = klasgenoot_Model::onlyTrashed()->get();
		$all = klasgenoot_Model::withTrashed()->get();
		$filter = "";
		
		if($position == 'huidige'){
			$filter = $spelers->all();
		}else if($position == 'oud'){
			$filter = $trashedklasgenoten->all();
		}else if($position == 'alle'){
			$filter = $all->all();
		}else if($position == 'voldoende'){
			$filter = $all->where('averge', '>=', 5.5)->get();
		}else if($position == 'onvoldoende'){
			$filter = $all->where('averge', '<', 5.5)->get();
		}



		return response()->json($filter);;
	} 
}





































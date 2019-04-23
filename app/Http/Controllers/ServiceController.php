<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() 
    {
    	$services = \App\Service::all();
    	return view('service.index', compact('services'));
    }


    public function edit($id) 
    {
    	$service = \App\Service::find($id);
    	return view('service.edit', compact('service'));
    }


    public function postUpdate(Request $request, $id) 
    {	
    	$this->validate($request, [
		    'title' => 'required|min:8',
		    'text' => 'required|min:8',
		]);

    	$service = \App\Service::find($id);
		$notification = array( 'message' => 'Service content successfully updated!', 'type' => 'success' );
		if($service->update($request->all())) {
			return redirect()->route('service.index')->with($notification);
		}
    	
    }
}

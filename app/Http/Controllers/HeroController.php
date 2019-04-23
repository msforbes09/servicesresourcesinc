<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index() 
    {
    	$hero = \App\Content::first();
    	return view('hero.index', compact('hero'));
    }


    public function edit($id) 
    {
    	$hero = \App\Content::first();
    	return view('hero.edit', compact('hero'));
    }


    public function postUpdate(Request $request, $id) 
    {	
    	$this->validate($request, [
		    'hero_header' => 'required',
		    'hero_lead' => 'required',
		    'hero_btn' => 'required',
		    'hero_link'	=> 'required'
		]);

    	$hero = \App\Content::find($id);
		$notification = array( 'message' => 'Hero header successfully updated!', 'type' => 'success' );
		if($hero->update($request->all())) {
			return redirect()->route('hero.index')->with($notification);
		}
    	
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index() 
    {
    	$cards = \App\Card::all();
    	return view('card.index', compact('cards'));
    }


    public function edit($id) 
    {
    	$card = \App\Card::find($id);
    	return view('card.edit', compact('card'));
    }


    public function postUpdate(Request $request, $id) 
    {	
    	$this->validate($request, [
		    'icon' => 'required|min:8|regex:/fa-/',
		    'title' => 'required|min:8',
		    'text' => 'required|min:8',
		]);

    	$card = \App\Card::find($id);
		$notification = array( 'message' => 'Card content successfully updated!', 'type' => 'success' );
		if($card->update($request->all())) {
			return redirect()->route('card.index')->with($notification);
		}
    	
    }
}

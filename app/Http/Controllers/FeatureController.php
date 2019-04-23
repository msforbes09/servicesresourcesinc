<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index() 
    {
        $feature = \App\Content::first();
        return view('feature.index', compact('feature'));
    }


    public function edit($id) 
    {
        $feature = \App\Content::first();
        return view('feature.edit', compact('feature'));
    }


    public function postUpdate(Request $request, $id) 
    {   
        $this->validate($request, [
            'feature_title' => 'required',
            'feature_text' => 'required|min:500',
        ]);

        $feature = \App\Content::find($id);
        $notification = array( 'message' => 'Feature content successfully updated!', 'type' => 'success' );
        if($feature->update($request->all())) {
            return redirect()->route('feature.index')->with($notification);
        }
        
    }
}

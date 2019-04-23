<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() 
    {
        $about = \App\Content::first();
        return view('about.index', compact('about'));
    }


    public function edit($id) 
    {
        $about = \App\Content::first();
        return view('about.edit', compact('about'));
    }


    public function postUpdate(Request $request, $id) 
    {   
        $this->validate($request, [
            'about_title' => 'required',
            'about_text' => 'required|min:500',
        ]);

        $about = \App\Content::find($id);
        $notification = array( 'message' => 'About Us content successfully updated!', 'type' => 'success' );
        if($about->update($request->all())) {
            return redirect()->route('about.index')->with($notification);
        }
        
    }
}

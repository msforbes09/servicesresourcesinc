<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() 
    {
        $job = \App\Content::first();
        return view('job.index', compact('job'));
    }


    public function edit($id) 
    {
        $job = \App\Content::first();
        return view('job.edit', compact('job'));
    }


    public function postUpdate(Request $request, $id) 
    {   
        $this->validate($request, [
            'job_header' => 'required|min:8',
            'job_btn' => 'required|min:8',
            'job_link' => 'required|min:8',
        ]);

        $job = \App\Content::find($id);
        $notification = array( 'message' => 'Job content successfully updated!', 'type' => 'success' );
        if($job->update($request->all())) {
            return redirect()->route('job.index')->with($notification);
        }
        
    }
}

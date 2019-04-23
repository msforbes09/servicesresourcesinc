<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function index()
    {
        $branches = \App\Contact::orderBy('created_at')->get();
        return view('branch.index', compact('branches'));
    }


    public function create()
    {
        return view('branch.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'tag' => 'required',
            'phones' => 'required|min:8',
            'emails' => 'required|min:8',
            'address' => 'required|min:8',
            'src_map' => 'required|min:50|regex:/https:/',

        ]);
        
        if( $branch = \App\Contact::create($request->all()) ) {
            $notification = array( 'message' => $request->name .' branch successfully created!', 'type' => 'success' );
            return redirect()->route('branch.index')->with($notification);
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $branch = \App\Contact::find($id);
        return view('branch.edit', compact('branch'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'tag' => 'required',
            'phones' => 'required|min:8',
            'emails' => 'required|min:8',
            'address' => 'required|min:8',
            'src_map' => 'required|min:50|regex:/https:/',

        ]);

        $branch = \App\Contact::find($id);
        
        if($branch->update($request->all())) {
            $notification = array( 'message' => $branch->name .' branch successfully updated!', 'type' => 'success' );
            return redirect()->route('branch.index')->with($notification);
        }
        
    }


    public function destroy($id)
    {
        if( $branch = \App\Contact::destroy($id) ) {
            $notification = array( 'message' => 'Branch successfully deleted!', 'type' => 'success' );
            return redirect()->route('branch.index')->with($notification);
        } 
    }
}

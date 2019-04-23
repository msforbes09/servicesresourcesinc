<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{

    public function index() 
    {
        $images = \App\Image::all();
        return view('image.index', compact('images'));
    }


    public function edit($id) 
    {
        $image = \App\Image::find($id);
        return view('image.edit', compact('image'));
    }


    public function postUpdate(Request $request, $id) 
    {   
    	//return $request->all();
        $this->validate($request, [
            'file' => 'required|dimensions:min_width=1200,min_height=800,max_width=4000,max_height=3000|image',
        ]);

        $image = \App\Image::find($id);
        if($request->hasFile('file')) {
            $uploadFile = $request->file('file');
            if ( file_exists(public_path('assets/images/avatars/'. $image->file)) ) {
                unlink(public_path('assets/images/avatars/'. $image->file));
            }
            $filename = $uploadFile->getClientOriginalName();
            Image::make($uploadFile)->resize(1600, null, function ($constraint) {
    			$constraint->aspectRatio();
			})->save( public_path('assets/images/background/') . $filename );
            $image->file = $filename; 
            $image->save();

            $notification = array( 'message' => 'Images content successfully updated!', 'type' => 'success' );
        	return redirect()->route('image.index')->with($notification);
        }
        $notification = array( 'message' => 'Images unable to upload something went wrong!', 'type' => 'error' );
        return redirect()->back()->with($notification);
        
    }

    public function postProfile(ProfileRequest $request) 
    {
    	$user = Sentinel::getUser();
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            if ( file_exists(public_path('images/avatars/'. $user->avatar)) ) {
                unlink(public_path('images/avatars/'. $user->avatar));
            }
            $filename = md5($user->id) . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300, 300)->save( public_path('images/avatars/') . $filename );
            $user->avatar = $filename;    
        }
        $user->mobile = $request->mobile;
        $user->middle_name = $request->middle_name;
        $user->save();
        session()->flash('success', 'Profile successfully updated.');
        return redirect()->back();
    }  
}

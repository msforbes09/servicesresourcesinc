<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    

    public function dataAjax() 
    {
    	$data = \App\Compliance::all();
    	return response()->json($data);
    }
}

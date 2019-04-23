<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
    	$content = \App\Content::first();
    	$cards = \App\Card::paginate(3);
        $services = \App\Service::paginate(4);
        $branches = \App\Contact::orderBy('created_at', 'ASC')->get();
        $compliance = \App\Compliance::all();

    	return view('main.main', compact('content', 'cards', 'services', 'branches', 'compliance'));	
    }
}

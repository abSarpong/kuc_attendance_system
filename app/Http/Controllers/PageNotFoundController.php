<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNotFoundController extends Controller
{
    //
    public function show() {
    	return view('page_not_found');
    }
}

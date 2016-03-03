<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BackendController extends Controller
{
    protected function getDashboard()
    {
    	return view('admin.dashboard');
    }
}

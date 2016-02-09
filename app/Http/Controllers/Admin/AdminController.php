<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	public function __construct()
	{
		view()->share('currentUser', auth()->user());
	}
	
    public function home()
    {
    	return view('admin.home');
    }
}

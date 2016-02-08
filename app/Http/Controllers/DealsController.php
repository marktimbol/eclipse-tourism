<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function index()
    {
    	$promos = Deal::with('package.photos')->latest()->get();

    	return view('public.deals.index', compact('promos'));
    }

    public function show($id, $package)
    {
    	return $package->name;
    }
}

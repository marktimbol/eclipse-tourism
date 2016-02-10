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
    	$promos = Deal::latest()->get();
    	return view('public.deals.index', compact('promos'));
    }

    public function show($promo)
    {
    	$pageTitle = $promo->name;
        $package = $promo;
        \JavaScript::put([
            'promo'   => $promo
            ]);
    	return view('public.deals.show', compact('pageTitle'));
    }
}

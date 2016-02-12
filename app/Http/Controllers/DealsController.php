<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Deal\DealsRepositoryInterface;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    protected $deal;

    public function __construct(DealsRepositoryInterface $deal)
    {
        $this->deal = $deal;
    }

    public function index()
    {
        $promos = $this->deal->latest();
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

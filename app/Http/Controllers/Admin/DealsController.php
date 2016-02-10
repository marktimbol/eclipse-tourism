<?php

namespace App\Http\Controllers\Admin;

use App\Deal;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function index()
    {
    	$promos = Deal::latest()->get();
    	return view('admin.deals.index', compact('promos'));
    }

    public function create()
    {
    	return view('admin.deals.create');
    }

    public function store(Request $request)
    {
    	if( ! Deal::create($request->all()) )
    	{
    		flash()->error('There was an error when adding a new promo. Please double-check your inputs.');
    		return redirect()->back()->withInput();
    	}

    	flash()->success('New promo has been successfully added.');
    	return redirect()->route('admin.deals.index');
    }

    public function show($promo)
    {
    	return view('admin.deals.show', compact('promo'));
    }

    public function edit($promo)
    {
    	return view('admin.deals.edit', compact('promo'));
    }

    public function update(Request $request, $promo)
    {
    	$promo->name = $request->name;
    	$promo->description = $request->description;

    	if( ! $promo->save() )
    	{
    		flash()->error('There was an error when updating a promo. Please double-check your inputs.');
    		return redirect()->back()->withInput();	
    	}

    	flash()->success('Promo has been successfully updated.');
    	return redirect()->route('admin.deals.show', $promo->id);
    }

    public function destroy($promo)
    {
    	if( ! $promo->delete() )
    	{
    		flash()->error('There was an error when deleting a promo. Please try again.');
    		return redirect()->back()->withInput();	
    	}

    	flash()->success('Promo has been successfully deleted.');
    	return redirect()->route('admin.deals.index');
    }
}

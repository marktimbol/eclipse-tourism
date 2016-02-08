<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use App\PackageInformation;
use Illuminate\Http\Request;

class PackagesInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
    	$newInfo = new PackageInformation([
    		'title' => $request->title,
    		'description'	=> $request->description
    	]);

    	$package = Package::findOrFail($request->package_id);

    	return $package->information()->save($newInfo);
    }

    public function update(Request $request)
    {
    	$packageInformation = PackageInformation::findOrFail($request->id);
        $packageInformation->title = $request->title;
        $packageInformation->description = $request->description;
        $packageInformation->save();

        return Package::findOrFail($request->package_id)->information;
    }

    public function destroy(Request $request)
    {
    	PackageInformation::findOrFail($request->id)->delete();

    	return Package::findOrFail($request->package_id)->information;
    }
}

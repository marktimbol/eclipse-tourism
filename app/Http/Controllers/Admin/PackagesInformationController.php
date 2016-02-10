<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\PackageInformation;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PackagesInformationController extends Controller
{
    public function __construct(PackageRepositoryInterface $package)
    {
        $this->package = $package;
    }

    public function store(Request $request)
    {
    	$data = new PackageInformation([
    		'title' => $request->title,
    		'description'	=> $request->description
    	]);

        $package = $this->package->find($request->package_id);

    	return $package->information()->save($data);
    }

    public function update(Request $request)
    {
    	$packageInformation = PackageInformation::findOrFail($request->id);
        $packageInformation->title = $request->title;
        $packageInformation->description = $request->description;
        
        $packageInformation->save();

        return $this->package->find($request->package_id)->information;
    }

    public function destroy(Request $request)
    {
    	PackageInformation::findOrFail($request->id)->delete();
        return $this->package->find($request->package_id)->information;
    }
}

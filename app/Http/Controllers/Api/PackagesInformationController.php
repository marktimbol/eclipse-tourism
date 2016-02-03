<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use App\PackageInformation;
use Illuminate\Http\Request;

class PackagesInformationController extends Controller
{
	public function all($packageId) {	
		return Package::findOrFail($packageId)->information;
	}
}

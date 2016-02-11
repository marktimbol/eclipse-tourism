<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\PackageInformation\PackageInformationRepositoryInterface as PackageInformationRepository;
use Eclipse\Repositories\Package\PackageRepositoryInterface as PackageRepository;
use Illuminate\Http\Request;

class PackagesInformationController extends Controller
{
	protected $package;
	protected $packageInformation;

    public function __construct(PackageRepository $package, PackageInformationRepository $packageInformation)
    {
    	$this->package = $package;
    	$this->packageInformation = $packageInformation;
    }

	public function all($packageId)
	{	
		return $this->package->find($packageId)->information;
	}

	public function get($packageId, $informationId)
	{
		return $this->packageInformation->find($informationId);
	}
}

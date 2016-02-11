<?php

namespace App\Http\Controllers\Admin;

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

    public function store(Request $request)
    {
        return $this->packageInformation->store($request->all());
    }

    public function update(Request $request)
    {
        $this->packageInformation->update($request->id, $request->all());

        /**
         * return all the package information to feed the React.
         */
        return $this->package->find($request->package_id)->information;
    }

    public function destroy(Request $request)
    {
        $this->packageInformation->delete($request->id);

        /**
         * return all the package information to feed the React.
         */
        return $this->package->find($request->package_id)->information;
    }
}

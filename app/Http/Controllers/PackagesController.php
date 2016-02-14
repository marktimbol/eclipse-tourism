<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    protected $package;
    protected $category;

    public function __construct(PackageRepositoryInterface $package, CategoryRepositoryInterface $category)
    {
    	$this->package = $package;
        $this->category = $category;
    }

    public function index()
    {
        \JavaScript::put([
            'categories'    => $this->category->all(),
            'packages'      => $this->package->all()
        ]);

    	return view('public.packages.index');
    }

    public function package($package)
    {        
        $pageTitle = sprintf('%s - %s', $package->name, $package->subtitle);

        \JavaScript::put([
            'package'   => $package,
            'relatedPackages' => $this->package->related($package->id)
            ]);

    	return view('public.packages.package', compact('pageTitle', 'package'));
    }

}

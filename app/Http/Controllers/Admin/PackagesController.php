<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreatePackageRequest;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    protected $currentUser;
    protected $package;
    protected $category;

    public function __construct(PackageRepositoryInterface $package, CategoryRepositoryInterface $category)
    {
        parent::__construct();

        $this->currentUser = auth()->user();
        $this->package = $package;
        $this->category = $category;

        $this->middleware('auth');
    }

    public function index()
    {
        $packages = $this->package->all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('admin.packages.create', compact('categories'));
    }

    public function store(CreatePackageRequest $request)
    {
        $category = $this->category->find($request->category_id); 
        $package = $category->packages()->create($request->all());

        if( ! $package )
        {
            flash()->error('There was an error when adding a Package. Please double-check your inputs.');
            return redirect()->back()->withInput(); 
        }

        $this->package->addPhoto($package->id, 'default.png');

        flash()->success('You have successfully added new Package.');
        return redirect()->route('admin.packages.index');
    }

    public function show($package)
    {
        \JavaScript::put([
            'currentPackage'   => $package,
            'package_id'    => $package->id
        ]);

        return view('admin.packages.show', compact('package'));
    }

    public function edit($package)
    {
        $categories = $this->category->all();
        return view('admin.packages.edit', compact('package', 'categories'));
    }

    public function update(CreatePackageRequest $request, $package)
    {                        
        if( ! $this->package->update($package->id, $request->all()) )
        {
            flash()->error('There was an error when updating a Package. Please double-check your inputs.');
            return redirect()->back()->withInput(); 
        }

        flash()->success('Package has been successfully updated.');
        return redirect()->route('admin.packages.index'); 
    }

    public function destroy($package)
    {
        if( ! $this->package->delete($package->id) )
        {
            flash()->error('There was an error when deleting a Package. Please try again.');
            return redirect()->back()->withInput(); 
        }

        flash()->success('Package has been successfully deleted.');
        return redirect()->route('admin.packages.index');         
    }
}

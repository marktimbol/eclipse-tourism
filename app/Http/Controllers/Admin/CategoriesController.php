<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        if( ! $this->category->store($request->all()) )
        {
            flash()->error('There was an error when adding a Category. Please double-check your inputs.');
            return redirect()->route('admin.categories.index');     
        }

        flash()->success('You have successfully added new Category.');
        return redirect()->route('admin.categories.index');        
    }

    public function edit($category)
    {
        return view('admin.categories.edit', compact('category'));         
    }

    public function update(Request $request, $category)
    {
        if( ! $this->category->update($category->id, $request->all()) )
        {
            flash()->error('There was an error when updating a Category. Please double-check your inputs.');
            return redirect()->back()->withInput();
        }

        flash()->success('You have successfully updated the Category.');
        return redirect()->route('admin.categories.edit', $category->id);          
    }

    public function destroy($category)
    {
        if( ! $this->category->delete($category->id) )
        {
            flash()->error('There was an error when deleting a Category. Please try again.');
            return redirect()->route('admin.categories.index');   
        }

        flash()->success('You have successfully deleted the Category.');
        return redirect()->route('admin.categories.index'); 
    }
}

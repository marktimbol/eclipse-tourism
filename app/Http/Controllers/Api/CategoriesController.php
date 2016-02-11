<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;

class CategoriesController extends Controller
{
	protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
    	$this->category = $category;
    }

    /**
     * We're just showing 8 categories on the Mega Menu
     */
    public function index()
    {
		return $this->category->take(8);
    }
}

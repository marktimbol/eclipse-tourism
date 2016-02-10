<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
{
	use DatabaseMigrations;

    public function test_view_all_categories_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/categories');
    }

    public function test_create_category_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/categories/create');
    }

    public function test_store_category_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$this->visit('/admin/categories/create')
    		->type('Category Name', 'name')
    		->press('Save Information')
    		->seeInDatabase('categories', ['name' => 'Category Name', 'slug' => 'category-name']);
    }

    public function test_edit_category_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$category = factory(App\Category::class)->create();

    	$this->visit('/admin/categories/'.$category->id.'/edit');
    }

    public function test_update_category_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$category = factory(App\Category::class)->create();

    	$this->visit('/admin/categories/'.$category->id.'/edit')
    		->type('Updated Category Name', 'name')
    		->press('Update Information')
    		->seeInDatabase('categories', ['name' => 'Updated Category Name', 'slug' => 'updated-category-name']);
    }

    public function test_destroy_category_on_the_admin_page()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$category = factory(App\Category::class)->create();

    	$this->visit('/admin/categories')
    		->press('Delete')
    		->dontSeeInDatabase('categories', ['id' => $category->id]);
    }
}

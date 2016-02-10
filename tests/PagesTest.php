<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
	use DatabaseMigrations;
	
    public function test_view_homepage()
    {
        $this->visit('/');
    }

    public function test_view_tourist_information_page()
    {
        $this->visit('/tourist-information');
    }

    public function test_view_corporate_page()
    {
        $this->visit('/corporate');
    }

    public function test_view_about_page()
    {
        $this->visit('/about');
    }

    public function test_view_contact_us_page()
    {
        $this->visit('/contact');
    }
}

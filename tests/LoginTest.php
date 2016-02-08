<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_an_employee_can_fillup_the_login_form()
    {
    	$this->visit('/login')
    		->type('mark@timbol.com', 'email')
    		->type('marktimbol', 'password')
    		->press('Login');

            //TODO here.
    }
}

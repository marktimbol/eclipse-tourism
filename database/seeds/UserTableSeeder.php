<?php

use App\Employee;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new Employee;
    	$user->name = 'Administrator';
    	$user->email = 'test@email.ae';
    	$user->password = bcrypt('marktimbol');
    	$user->save();
    }
}

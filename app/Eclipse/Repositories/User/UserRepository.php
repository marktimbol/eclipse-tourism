<?php

namespace Eclipse\Repositories\User;

use App\User;

class UserRepository implements UserRepositoryInterface {

	public function find($id) {
		return User::with('bookings.packages')->findOrFail($id);
	}

	public function store($data) {
		return User::create($data);
	}
	
}



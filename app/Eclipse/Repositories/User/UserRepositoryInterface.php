<?php

namespace Eclipse\Repositories\User;

interface UserRepositoryInterface {
	
	public function find($id);

	public function store($data);

}
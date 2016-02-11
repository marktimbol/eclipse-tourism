<?php

namespace Eclipse\Repositories\PackageInformation;

interface PackageInformationRepositoryInterface {

	public function find($id);

	public function store($data);
	
	public function update($id, $data);
	
	public function delete($id);
}
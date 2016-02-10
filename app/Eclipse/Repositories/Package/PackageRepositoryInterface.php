<?php

namespace Eclipse\Repositories\Package;

interface PackageRepositoryInterface {
	
	public function all();

	public function take($number);

	public function find($id);

	public function store($data);
	
	public function update($id, $data);

	public function delete($id);

	public function related($packageId);

	public function addPhoto($id, $filename);

	public function deletePhoto($path);

	public function deleteRelatedPhotos($id, $model);
	
	public function needsToConfirm($package);
}
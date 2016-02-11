<?php

namespace Eclipse\Repositories\PackageInformation;

use App\PackageInformation;
use Eclipse\Repositories\Package\PackageRepositoryInterface;

class PackageInformationRepository implements PackageInformationRepositoryInterface {

	protected $package;

	public function __construct(PackageRepositoryInterface $package)
	{
		$this->package = $package;
	}

	public function find($id)
	{
		return PackageInformation::findOrFail($id);
	}

	public function store($data)
	{
    	$newInformation = new PackageInformation([
    		'title' => $data['title'],
    		'description'	=> $data['description']
    	]);

        $package = $this->package->find($data['package_id']);

    	return $package->information()->save($newInformation);
	}

	public function update($id, $data)
	{
		$packageInformation = $this->find($id);
		$packageInformation->fill($data);

		$packageInformation->save();
	}

	public function delete($id)
	{
		return $this->find($id)->delete();
	}
}
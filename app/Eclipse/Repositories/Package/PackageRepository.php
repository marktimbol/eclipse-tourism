<?php

namespace Eclipse\Repositories\Package;

use App\Package;
use App\Photo;
use Illuminate\Support\Facades\File;

class PackageRepository implements PackageRepositoryInterface {
	
	public function all() {
		return Package::with('photos', 'category', 'tickets', 'information')
			->get();
	}

	public function take($number) {
		return Package::with('photos', 'category', 'information', 'tickets')
			->take($number)
			->get();
	}

	public function find($id) {
		return Package::with('photos', 'information', 'tickets')
			->findOrFail($id);
	}

	public function store($data) {
		return Package::create($data);
	}

	public function update($id, $data)
	{	
		$package = $this->find($id);
		$package->fill($data);
		$package->save();

		return $package;
	}

	public function delete($id)
	{
		$package = $this->find($id);
		$this->deleteRelatedPhotos($package->id, 'Package');		

		return $package->delete();
	}

	public function related($packageId)
	{
		$package = Package::findOrFail($packageId);
		$category = $package->category->id;

		return Package::with('photos')
			->where('id', '<>', $packageId)
			->where('category_id', $category)
			// ->orderByRaw('RAND()')
			->take(3)
			->get();	
	}
	
	public function addPhoto($id, $filename)
	{
		$package = $this->find($id);
		$photo = new Photo;
		$photo->path = $filename;
		return $package->photos()->save($photo);
	}	

	public function deletePhoto($path)
	{
		$photoPath = public_path('images/uploads/'.$path);

		try {
	        if( File::isFile($photoPath) ) {
	            File::delete( $photoPath );
	        }	
	        Photo::wherePath($path)->delete();
		} catch (Exception $e) {
			
		}
	}

	public function deleteRelatedPhotos($id, $model)
	{
		$model = 'App\\'.$model;
		$photos = Photo::where('imageable_type', $model)
							->where('imageable_id', $id);

		if( count($photos) > 0 )
		{
			foreach( $photos->get() as $photo )
			{
				$photoPath = public_path('images/uploads/'.$photo->path);
				try {
			    	if( File::isFile($photoPath) ) {
			        	File::delete( $photoPath );
			        }					
				} catch (Exception $e) {
					
				}
		    }

	        $photos->delete();
		}
	}	

	public function needsToConfirm($package) {
		// return $package->confirmAvailability;
	}
}
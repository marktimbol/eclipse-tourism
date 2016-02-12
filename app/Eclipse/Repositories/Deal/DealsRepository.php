<?php

namespace Eclipse\Repositories\Deal;

use App\Deal;
use App\Photo;
use Eclipse\Repositories\Deal\DealsRepositoryInterface;
use Illuminate\Support\Facades\File;

class DealsRepository implements DealsRepositoryInterface
{
	public function find($id)
	{
		return Deal::findOrFail($id);
	}

	public function latest()
	{
		return Deal::latest()->get();
	}

	public function addPhoto($id, $filename)
	{
        $promo = $this->find($id);
        $photo = new Photo;
        $photo->path = $filename;

        return $promo->photos()->save($photo);
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
}
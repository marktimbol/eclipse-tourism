<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotosController extends Controller
{
    protected $uploadsDirectory = '/images/uploads/';

    protected $package;

    public function __construct(PackageRepositoryInterface $package)
    {
        $this->package = $package;

        $this->middleware('auth');
    }

    public function uploadPackagePhoto(Request $request)
    {
        if( $request->hasFile('photo') )
        {
            $file = $request->file('photo');

            $filename = $this->makeThumbnail($file);

            return $this->package->addPhoto($request->package_id, $filename);
        }
    }

    public function deletePackagePhoto($path)
    {
        $this->package->deletePhoto($path);

        return redirect()->back();
    }

    protected function makeThumbnail(UploadedFile $photo)
    {   
        $filename = sprintf('%s-%s', time(), str_replace(' ', '-', $photo->getClientOriginalName()));

        $image = Image::make($photo->getRealPath());

        $image->resize(1000, null, function($constraint) {
            $constraint->aspectRatio();
        })
        ->save( $this->fullPath($filename) )
        ->stream();  

        Storage::disk('s3')->put($this->uploadsDirectory . $filename, $image->__toString());

        return $filename;
        
    }    

    protected function fullPath($filename)
    {
        return public_path() . $this->uploadsDirectory . $filename;
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\SendMessageRequest;
use App\Jobs\SendMessage;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $package;

    public function __construct(PackageRepositoryInterface $package) {
        $this->package = $package;
    }

    public function home()
    {        
        setDefaultCurrency();

        \JavaScript::put([
            'packages' => $this->package->take(9) //featuredPackages
            ]);

        return view('public.home');
    }    

    public function touristInformation() {
    	return view('public.tourist-information');
    }

    public function corporate() {
    	return view('public.corporate');
    }

    public function about() {
    	return view('public.about');
    }

    public function contact() {
    	return view('public.contact');
    }

    public function submitContact(SendMessageRequest $request)
    {
        $this->dispatch( new SendMessage($request->name, $request->email, $request->phone, $request->message) );
        flash()->overlay('Your inquiry was sent successfully. Our customer representative will contact you shortly.');
        
        return redirect()->route('contact');
    }

    public function changeCurrency(Request $request)
    {  
        session(['currency' => $request->currency]);
        return session('currency');
    }

    public function convertAmount($amount, $currency) {
        return convertedAmountWithCurrency($amount, $currency);
    }
}

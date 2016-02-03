<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function store(Request $request)
    {
    	$newTicket = new Ticket([
    		'name' => $request->name,
            'adultPrice'    => $request->adultPrice,
            'childPrice'    => $request->childPrice
    	]);

    	$package = Package::findOrFail($request->package_id);

    	return $package->tickets()->save($newTicket);
    }

    public function update(Request $request)
    {
    	$ticket = Ticket::findOrFail($request->id);
        $ticket->name = $request->name;
        $ticket->adultPrice = $request->adultPrice;
        $ticket->childPrice = $request->childPrice;
        $ticket->save();

        return Package::findOrFail($request->package_id)->tickets;
    }

    public function destroy(Request $request)
    {
    	Ticket::findOrFail($request->id)->delete();

    	return Package::findOrFail($request->package_id)->tickets;
    }
}

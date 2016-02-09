<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
	public function all($packageId) {	
		return Package::findOrFail($packageId)->tickets;
	}

    public function get($packageId, $ticketId)
    {
        return Ticket::find($ticketId);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Repositories\Ticket\TicketRepositoryInterface;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
	protected $package;
    protected $ticket;

    public function __construct(PackageRepositoryInterface $package, TicketRepositoryInterface $ticket)
    {
    	$this->package = $package;
        $this->ticket = $ticket;
    }

	public function all($packageId)
	{	
		return $this->package->find($packageId)->tickets;
	}

    public function get($packageId, $ticketId)
    {
        return $this->ticket->find($ticketId);
    }
}

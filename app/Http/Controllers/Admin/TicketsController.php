<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Repositories\Ticket\TicketOptionsRepositoryInterface;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    protected $package;
    protected $ticket;

    public function __construct(PackageRepositoryInterface $package, TicketOptionsRepositoryInterface $ticket)
    {
        $this->package = $package;
        $this->ticket = $ticket;
    }
    
    public function store(Request $request)
    {
        $this->ticket->store($request->all());
    }

    public function update(Request $request)
    {
        $this->ticket->update($request->id, $request->all());

        /**
         * return all the package ticket options to feed the React.
         */       
        return $this->package->find($request->package_id)->tickets;
    }

    public function destroy(Request $request)
    {
        $this->ticket->delete($request->id);

        /**
         * return all the package ticket options to feed the React.
         */        
    	return $this->package->find($request->package_id)->tickets;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Ticket\TicketRepositoryInterface;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    protected $ticket;

    public function __construct(TicketRepositoryInterface $ticket)
    {
        $this->ticket = $ticket;
    }
    
    public function store(Request $request)
    {
        $this->ticket->store($request->all());
    }

    public function update(Request $request)
    {
        $this->ticket->update($request->id, $request->all());
    }

    public function destroy(Request $request)
    {
        $this->ticket->delete($request->id);
    }
}

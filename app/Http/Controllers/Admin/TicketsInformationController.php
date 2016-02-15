<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Ticket\Information\TicketInformationRepositoryInterface;
use Illuminate\Http\Request;

class TicketsInformationController extends Controller
{
    protected $ticketInformation;

    public function __construct(TicketInformationRepositoryInterface $ticketInformation)
    {
        $this->ticketInformation = $ticketInformation;
    }
    
    public function store(Request $request)
    {
        $this->ticketInformation->store($request->all());
    }

    public function update(Request $request)
    {
        $this->ticketInformation->update($request->id, $request->all());
    }

    public function destroy(Request $request)
    {
        $this->ticketInformation->delete($request->id);
    }
}

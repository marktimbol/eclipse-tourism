<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Ticket\Information\TicketInformationRepositoryInterface;
use Eclipse\Repositories\Ticket\TicketRepositoryInterface;
use Illuminate\Http\Request;

class TicketsInformationController extends Controller
{
    protected $ticket;
    protected $ticketInformation;

    public function __construct(TicketRepositoryInterface $ticket, TicketInformationRepositoryInterface $ticketInformation)
    {
        $this->ticket = $ticket;
        $this->ticketInformation = $ticketInformation;
    }

    public function all($ticketId)
    {   
    	return $this->ticket->find($ticketId)->information;
    }

    public function get($ticketId, $informationId)
    {
        return $this->ticketInformation->find($informationId);
    }
}

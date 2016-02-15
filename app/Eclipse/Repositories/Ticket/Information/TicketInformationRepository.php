<?php

namespace Eclipse\Repositories\Ticket\Information;

use App\Ticket;
use App\TicketInformation;
use Eclipse\Repositories\Ticket\Information\TicketInformationRepositoryInterface;

class TicketInformationRepository implements TicketInformationRepositoryInterface {

	public function find($id)
	{
		return TicketInformation::findOrFail($id);
	}

	public function store($data)
	{
		$ticketId = $data['ticketId'];
		$name = $data['name'];
		$description = $data['description'];

		$newTicketInformation = new TicketInformation([
			'name' => $name,
		    'description'    => $description
		]);

		$ticket = Ticket::findOrFail($ticketId);

		return $ticket->information()->save($newTicketInformation);
	}

	public function update($id, $data)
	{
		$ticketInformation = $this->find($id);
		$ticketInformation->fill($data);

		$ticketInformation->save();
	}

	public function delete($id)
	{
		return $this->find($id)->delete();
	}
}
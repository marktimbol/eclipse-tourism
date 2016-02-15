<?php

namespace Eclipse\Repositories\Ticket;

interface TicketRepositoryInterface {

	public function find($id);

	public function store($data);
	
	public function update($id, $data);
	
	public function delete($id);
}
<?php

namespace Eclipse\Repositories\Ticket\Information;

interface TicketInformationRepositoryInterface {

	public function find($id);

	public function store($data);
	
	public function update($id, $data);
	
	public function delete($id);
}
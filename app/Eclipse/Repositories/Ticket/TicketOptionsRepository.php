<?php

namespace Eclipse\Repositories\Ticket;

use App\Ticket;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Repositories\Ticket\TicketOptionsRepositoryInterface;

class TicketOptionsRepository implements TicketOptionsRepositoryInterface {

	protected $package;

	public function __construct(PackageRepositoryInterface $package)
	{
		$this->package = $package;
	}

	public function find($id)
	{
		return Ticket::findOrFail($id);
	}

	public function store($data)
	{
    	$newTicketOption = new Ticket([
    		'name' => $data['name'],
            'adultPrice'    => $data['adultPrice'],
            'childPrice'    => $data['childPrice']
    	]);

        $package = $this->package->find($data['package_id']);

    	return $package->tickets()->save($newTicketOption);
	}

	public function update($id, $data)
	{
		$ticketOption = $this->find($id);
		$ticketOption->fill($data);

		$ticketOption->save();
	}

	public function delete($id)
	{
		return $this->find($id)->delete();
	}
}
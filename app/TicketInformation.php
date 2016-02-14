<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketInformation extends Model
{
	protected $fillable = ['ticket_id', 'name', 'description'];

	protected $table = 'ticket_information';

	public function ticket()
	{
		return $this->belongsTo(Ticket::class);
	}
}

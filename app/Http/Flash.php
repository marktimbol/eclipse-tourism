<?php

namespace App\Http;

class Flash 
{	
	public function create($message, $level, $key = 'flash_message')
	{
		session()->flash($key, [
			'title' => companyName(),
			'message' => $message,
			'level'	=> $level
		]);
	}
	public function info($message)
	{
		return $this->create($message, 'info');
	}

	public function success($message)
	{
		return $this->create($message, 'success');
	}

	public function error($message)
	{
		return $this->create($message, 'error');
	}

	public function overlay($message, $level = 'success')
	{
		return $this->create($message, $level, 'flash_message_overlay');
	}
}
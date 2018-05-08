<?php

declare(strict_types = 1);

namespace App\Model\Customer;

class Customer
{

	/** @var string */
	private $emailAddress;

	/** @var string */
	private $name;

	public function __construct(
		string $emailAddress,
		string $name
	)
	{
		$this->emailAddress = $emailAddress;
		$this->name = $name;
	}

}

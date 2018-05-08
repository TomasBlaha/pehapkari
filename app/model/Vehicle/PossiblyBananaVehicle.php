<?php

declare(strict_types = 1);

namespace App\Model\Vehicle;

class PossiblyBananaVehicle
{

	/** @var string */
	private $type;

	public function __construct(
		string $type
	)
	{
		$this->type = $type;
	}

}

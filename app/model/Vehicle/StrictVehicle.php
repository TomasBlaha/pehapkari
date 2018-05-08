<?php

declare(strict_types = 1);

namespace App\Model\Vehicle;

class StrictVehicle
{

	/** @var \App\Model\Vehicle\VehicleTypeEnum */
	private $type;

	public function __construct(
		VehicleTypeEnum $type
	)
	{
		$this->type = $type;
	}

}

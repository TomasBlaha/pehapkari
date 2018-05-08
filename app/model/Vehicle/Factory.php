<?php

declare(strict_types = 1);

namespace App\Model\Vehicle;

class Factory
{

	public function getCar(): StrictVehicle
	{
		return new StrictVehicle(
			VehicleTypeEnum::get(VehicleTypeEnum::VEHICLE_TYPE_CAR)
		);
	}

}

<?php

declare(strict_types = 1);

namespace App\Model\Vehicle;

use Enum\AbstractEnum;

class VehicleTypeEnum extends AbstractEnum
{

	const VEHICLE_TYPE_CAR = 'car';
	const VEHICLE_TYPE_BIKE = 'bike';
	const VEHICLE_TYPE_MOTORBIKE = 'motorbike';

}

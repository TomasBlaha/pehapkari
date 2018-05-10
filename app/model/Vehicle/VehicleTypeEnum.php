<?php

declare(strict_types = 1);

namespace App\Model\Vehicle;

use Enum\AbstractEnum;

class VehicleTypeEnum extends AbstractEnum
{

	public const VEHICLE_TYPE_CAR = 'car';
	public const VEHICLE_TYPE_BIKE = 'bike';
	public const VEHICLE_TYPE_MOTORBIKE = 'motorbike';

}

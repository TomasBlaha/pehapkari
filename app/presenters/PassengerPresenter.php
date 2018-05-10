<?php

declare(strict_types = 1);

namespace App\Presenters;


use App\Model\Customer\BadPassenger;
use App\Model\Document\ObcanskyPrukaz;
use App\Model\Document\Pas;
use App\Model\Passenger\GoodPassenger;

class PassengerPresenter
{

	public function renderDummies(): void
	{
		$foreignBadPassanger = new BadPassenger(
			'Ivan Drago',
			null,
			'RUS0001',
			null
		);
		$foreignBadPassangerwrong = new BadPassenger(
			'Ivan Drago',
			'RUS001',
			null,
			null
		);
		$nativeBadPassanger = new BadPassenger(
			'Martin Chytrý',
			'CZ009919385',
			null,
			null
		);

		$foreignGoodPassanger = new GoodPassenger(
			'Ivan Drago',
			new Pas('RUS0001')
		);
		$nativeGoodPassanger = new GoodPassenger(
			'Martin Chytrý',
			new ObcanskyPrukaz('CZ029238345U5')
		);
	}

}

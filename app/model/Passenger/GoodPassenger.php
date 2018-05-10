<?php

declare(strict_types = 1);

namespace App\Model\Passenger;

use App\Model\Document\DocumentInterface;
use App\Model\Document\ObcanskyPrukaz;
use App\Model\Document\Pas;
use App\Model\Document\RidicskyPrukaz;

class GoodPassenger
{

	/** @var string */
	private $jmeno;

	/** @var \App\Model\Document\DocumentInterface */
	private $doklad;

	public function __construct(
		string $jmeno,
		DocumentInterface $doklad
	)
	{
		$this->doklad = $doklad;
		$this->jmeno = $jmeno;

		if ($doklad instanceof RidicskyPrukaz) {
			// do business logic
		} elseif ($doklad instanceof Pas) {
			// do business logic
		} elseif ($doklad instanceof  ObcanskyPrukaz) {
			// do business logic
		} else {
			throw new \InvalidArgumentException(
				'Unresolved document given: ' . get_class($doklad)
			);
		}
	}

}

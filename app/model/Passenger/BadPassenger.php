<?php

declare(strict_types = 1);

namespace App\Model\Customer;

class BadPassenger
{

	/** @var string */
	private $jmeno;

	/** @var string|null */
	private $obcanskyPrukaz;

	/** @var string|null */
	private $pas;

	/** @var string|null */
	private $ridicskyPrukaz;

	// One document is required!
	public function __construct(
		string $jmeno,
		?string $obcanskyPrukaz,
		?string $pas,
		?string $ridicskyPrukaz
	)
	{
		if ($obcanskyPrukaz === null && $pas === null && $ridicskyPrukaz === null) {
			throw new \InvalidArgumentException('One document is required');
		} elseif (
			($obcanskyPrukaz !== null && $pas !== null) ||
			($pas !== null && $ridicskyPrukaz !== null) ||
			($ridicskyPrukaz !== null && $obcanskyPrukaz !== null)
		) {
			throw new \InvalidArgumentException('Only one document is required');
		} elseif ($obcanskyPrukaz !== null) {
			$this->obcanskyPrukaz = $obcanskyPrukaz;
		} elseif ($pas !== null) {
			$this->pas = $pas;
		} elseif ($ridicskyPrukaz !== null) {
			$this->ridicskyPrukaz = $ridicskyPrukaz;
		} else {
			throw new \Exception("Something weird happened...");
		}

		$this->jmeno = $jmeno;
	}

}

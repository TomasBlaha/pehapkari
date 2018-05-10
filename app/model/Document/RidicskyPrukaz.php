<?php

declare(strict_types = 1);

namespace App\Model\Document;


class RidicskyPrukaz implements DocumentInterface
{

	public function getIdentifier(): string
	{
		return $this->getNumberFromAPI();
	}

}

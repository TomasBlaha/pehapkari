<?php

declare(strict_types = 1);

namespace App\Model\Document;


class ObcanskyPrukaz implements DocumentInterface
{

	public function getIdentifier(): string
	{
		return $this->getNewIdentifier();
	}

}

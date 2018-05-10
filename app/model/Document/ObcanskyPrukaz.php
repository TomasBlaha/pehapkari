<?php

declare(strict_types = 1);

namespace App\Model\Document;


class ObcanskyPrukaz implements DocumentInterface
{

	/** @var string  */
	private $identifier;

	public function __construct(string $identifier)
	{
		$this->identifier = $identifier;
	}

	public function getIdentifier(): string
	{
		return $this->identifier;
	}

}

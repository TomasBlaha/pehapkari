<?php

declare(strict_types = 1);

namespace App\Model\Customer;

use Consistence\Type\Type;

class CustomerList
{

	/** @var \App\Model\Customer\Customer[]  */
	private $items;

	/**
	 * @param \App\Model\Customer\Customer[] $items
	 */
	public function __construct(
		array $items
	)
	{
		// @dodelat ukazku do ktere prepnes - pole int/string - VRATIT CUSTOMER :-)
		Type::checkType($items, 'int[]|string[]');

		$this->items = $items;
	}

	public function hasItems(): bool
	{
		return count($this->items) > 0;
	}

	/**
	 * @return \App\Model\Customer\Customer[]
	 */
	public function getItems(): array
	{
		return $this->items;
	}

}

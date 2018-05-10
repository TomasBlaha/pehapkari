<?php

declare(strict_types = 1);

namespace App\Presenters;

use App\Repository\Repository;
use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{

	private $repository;

	public function __construct(
		Repository $repository
	)
	{
		parent::__construct();
		$this->repository = $repository;
	}

	public function renderDefault()
	{
		/** @var \App\Offer\Offer $offers */
		$offers = $this->repository->getOffers();

		$bestOffers = [];

		// Do not forget to change also renderDetail()!
		foreach ($offers as $offer) {
			if ($offer['howGoodIsIt'] >= 10) {
				$bestOffers[] = $offer;
			}
		}

		$this->template->offers = $offers;
	}

	public function renderDetail()
	{
		/** @var \App\Offer\Offer $offers */
		$offers = $this->repository->getOffers();

		$bestOffers = [];

		// Do not forget to change another 5 files!
		foreach ($offers as $offer) {
			if ($offer['provider'] === 'Skvělý prodejce') {
				$bestOffers[] = $offer;
			}
		}

		$this->template->offers = $offers;
	}

}

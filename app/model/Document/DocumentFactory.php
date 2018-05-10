<?php
/**
 * Created by PhpStorm.
 * User: tomasblaha
 * Date: 10.05.18
 * Time: 15:21
 */

namespace App\Model\Document;


class DocumentFactory
{

	public static function getPassport(): DocumentInterface
	{
		return new Pas();
	}

	public static function getIdCard(): DocumentInterface
	{
		return new ObcanskyPrukaz();
	}

}

<?php

namespace App\Service;

class AgeCalculator
{
	private const BIRTHDATE_STRING = '2003-06-18';
	private readonly \DateTimeImmutable $birthDate;
	
	public function __construct()
	{
		$this->birthDate = new \DateTimeImmutable(self::BIRTHDATE_STRING);
	}
	
	public function calculateAge(): int
	{
		$now = new \DateTimeImmutable();
		$interval = $now->diff($this->birthDate);
		return $interval->y;
	}
}
<?php


namespace Beyondercode\Ebank\Model\Employee;

use Beyondercode\Ebank\Model\Authenticable;

class Director extends Employee implements Authenticable
{
	public function calculateBonus(): float
	{
		return $this->getSalary() * 2;
	}

	public function authenticate(string $password): bool
	{
		return $password === '1234';
	}

}

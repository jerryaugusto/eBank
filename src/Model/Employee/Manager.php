<?php


namespace Beyondercode\Ebank\Model\Employee;


use Beyondercode\Ebank\Model\Authenticable;

class Manager extends Employee implements Authenticable
{
	public function calculateBonus(): float
	{
		return $this->getSalary();
	}

	public function authenticate(string $password): bool
	{
		return  $password === '4321';
	}
}
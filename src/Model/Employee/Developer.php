<?php


namespace Beyondercode\Ebank\Model\Employee;


class Developer extends Employee
{
	public function levelUp(): void
	{
		$this->getsRaise($this->getSalary() * .75);
	}

	public function calculateBonus(): float
	{
		return 500;
	}

}

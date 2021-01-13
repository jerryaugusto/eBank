<?php

namespace Beyondercode\Ebank\Model\Employee;

use Beyondercode\Ebank\Model\{Cpf, Person};

abstract class Employee extends Person
{
    private float $salary;

    public function __construct(string $name, Cpf $cpf, float $salary)
    {
        parent::__construct($name, $cpf);
        $this->salary = $salary;
    }

    public function setName(string $name): void
    {
        $this->validateName($name);
        $this->name = $name;
    }

	public function getsRaise(float $increaseValue): void
	{
		if ($increaseValue < 0) {
			echo "Aumento deve ser positivo!";
			return;
		}

		$this->salary += $increaseValue;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    abstract public function calculateBonus(): float;

}
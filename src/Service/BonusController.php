<?php

namespace Beyondercode\Ebank\Service;

use Beyondercode\Ebank\Model\Employee\Employee;

class BonusController
{
    private float $bonusTotal = 0;
    public function bonusCalculation(Employee $collaborator): void
    {
        $this->bonusTotal += $collaborator->calculateBonus();
    }

    public function getTotal(): float
    {
        return $this->bonusTotal;
    }

}

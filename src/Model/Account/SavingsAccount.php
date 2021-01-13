<?php


namespace Beyondercode\Ebank\Model\Account;


class SavingsAccount extends Account
{
    protected function percentageFee(): float
    {
        return 1.03;
    }
}
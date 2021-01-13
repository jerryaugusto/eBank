<?php


namespace Beyondercode\Ebank\Model\Account;


class CheckingAccount extends Account
{
    protected function percentageFee(): float
    {
        return 1.05;
    }

    public function transfer(float $toTransfer, Account $targetAccount): void
    {
        if ($toTransfer < $this->balance) {
            echo "Balance unavailable!";
            return;
        }

        $this->withdraw($toTransfer);
        $targetAccount->deposit($toTransfer);
    }
}
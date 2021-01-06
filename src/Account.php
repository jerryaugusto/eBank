<?php

class Account
{
    private Owner $owner;
    private float $balance;
    private static int $accountNumber = 0;

    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
        $this->balance = 0;

        self::$accountNumber++;
    }

    public function __destruct()
    {
        self::$accountNumber--;
    }

    public function withdraw(float $toWithdraw): void
    {
        if ($toWithdraw > $this->balance) {
            echo "Balance unavailable!";
            return;
        }

        $this->balance -= $toWithdraw;
    }

    public function deposit(float $toDeposit): void
    {
        if ($toDeposit < 0) {
            echo "Value must be positive!";
            return;
        }

        $this->balance += $toDeposit;
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

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getOwner(): Owner
    {
        return $this->owner;
    }

    public static function getAccountNumber(): int
    {
        return self::$accountNumber;
    }
}

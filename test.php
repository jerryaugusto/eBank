<?php

use Beyondercode\Ebank\Model\Account\{Account, CheckingAccount, Owner, SavingsAccount};
use Beyondercode\Ebank\Model\{Address, Cpf};

require_once __DIR__ . '/autoload.php';

$account = new SavingsAccount(
    new Owner(
        new Cpf('123.456.789-10'),
        'Jerry Augusto',
        new Address('Barra do Bugres', 'Jardim Imperial', 'Rua 11', '749')
    )
);

$account->deposit(500);
$account->withdraw(100);

echo $account->getBalance();

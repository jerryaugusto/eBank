<?php

require_once __DIR__ . '/autoload.php';

use Beyondercode\Ebank\Model\Account\{Account, Owner};
use Beyondercode\Ebank\Model\{Address, Cpf};

$address = new Address('Barra do Bugres', 'Jardim Imperial', 'Rua 11', '749');
$jerry = new Owner(new Cpf('123.456.789-10'), 'Jerry', $address);
$firstAccount = new Account($jerry);

$firstAccount->deposit(500);
$firstAccount->withdraw(300);
var_dump($firstAccount) . PHP_EOL;

$secondAccount = new Account(new Owner(new Cpf('987.654.321-00'), 'Augusto', $address));
unset($secondAccount);

echo $firstAccount->getOwner()->getCpf()->getNumber() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

echo Account::getAccountNumber();

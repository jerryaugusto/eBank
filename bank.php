<?php

require_once __DIR__ . '/src/Account.php';
require_once __DIR__ . '/src/Owner.php';
require_once __DIR__ . '/src/Cpf.php';

$jerry = new Owner(new Cpf('123.456.789-10'), 'Jerry');
$firstAccount = new Account($jerry);

$firstAccount->deposit(500);
$firstAccount->withdraw(300);
var_dump($firstAccount) . PHP_EOL;

$secondAccount = new Account(new Owner(new Cpf('987.654.321-00'), 'Augusto'));
unset($secondAccount);

echo $firstAccount->getOwner()->getCpf()->getNumber() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

echo Account::getAccountNumber();

<?php

use Beyondercode\Ebank\Model\Address;

require_once __DIR__ . '/autoload.php';

$theAddress = new Address(
	'Barra do Bugres',
	'Jardim Imperial',
	'Rua 11',
	'749'
);

$otherAddress = new Address(
	'Alto Paraguai',
	'Centro',
	'Rua 15 de Novembro',
	'S/N'
);

echo $theAddress->City . PHP_EOL;
echo $otherAddress->City;

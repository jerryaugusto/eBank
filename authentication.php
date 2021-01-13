<?php

use Beyondercode\Ebank\Model\Account\Owner;
use Beyondercode\Ebank\Model\Cpf;
use Beyondercode\Ebank\Model\Employee\{Director, Manager};
use Beyondercode\Ebank\Service\Authenticator;

require_once __DIR__ . '/autoload.php';

$authenticator = new Authenticator();

$aDirector = new Owner(
	new Cpf('321.456.987-12'),
	'Jaozim',
	5000
);

$authenticator->tryLogin($aDirector, '1234');

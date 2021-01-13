<?php

require_once __DIR__ . '/autoload.php';

use Beyondercode\Ebank\Model\Cpf;
use Beyondercode\Ebank\Model\Employee\{Developer, Director, Manager, VideoEditor};
use Beyondercode\Ebank\Service\BonusController;

$aDeveloper = new Developer(
    'Jerry Augusto',
    new Cpf('123.456.789-10'),
    '3000'
);

$aDeveloper->levelUp();


$aManager = new Manager(
    'Rodrigues Araujo',
    new Cpf('321.654.987-01'),
    '5000'
);

$aDirector = new Director(
	'Rosina',
	new Cpf('321.654.987-01'),
	'10000'
);

$aVideoEditor = new VideoEditor(
	'João Pedro',
	new Cpf('123.654.789-01'),
	'1400'
);

$controller = new BonusController();
$controller->bonusCalculation($aDeveloper);
$controller->bonusCalculation($aManager);
$controller->bonusCalculation($aDirector);
$controller->bonusCalculation($aVideoEditor);

echo $controller->getTotal();

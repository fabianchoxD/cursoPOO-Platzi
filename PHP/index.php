<?php

require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');

$uberX = new UberX("RTC46F", new Account("Fabian Varon", "AMS123"), "Audi", "2023");
$uberX->printDataCar();

$uberPool = new UberPool("CPW554", new Account("Cosme Fulanito", "1345ADC"), "Lamborgini", "2020");
$uberPool->printDataCar();

?>
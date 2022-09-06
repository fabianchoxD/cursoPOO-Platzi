<?php

require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberVan.php');

$uberX = new UberX("RTC46F", new Account("Fabian Varon", "AMS123"), "Audi", "2023");
$uberX->setPassenger(1);
$uberX->printDataCar();

$uberPool = new UberPool("CPW554", new Account("Cosme Fulanito", "1345ADC"), "Lamborgini", "2020");
$uberPool->setPassenger(4);
$uberPool->printDataCar();

$uberPool2 = new UberPool("P00L", new Account("Cosme Pool", "134EADC"), "Lamborgini", "2025");
$uberPool2->setPassenger(2);
$uberPool2->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

$uberX2 = new UberX("CVB123", new Account("Andres Herrera", "TTC556F"), "Chevrolet", "Spark");
$uberX2->setPassenger(4);
$uberX2->printDataCar();

$uberVan2 = new UberVan("DER56Y", new Account("Josefina Ramírez", "555RRFR"), "Nissan", "Centra");
$uberVan2->setPassenger(2);
$uberVan2->printDataCar();
?>
<?php
require 'DigitalGood.php';
require 'WeightGood.php';


$PhysicalDisk = new PhysicalGood('Диск с ПО и лицензией', 1000);

$PhysicalDisk->getValue();

$DigitalKey = new DigitalGood('Лицензионный ключ', 500);

$DigitalKey->getValue();

$WeightSugar = new WeightGood('Сахар', 47, 10);
$WeightSugar->getValue();
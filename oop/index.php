<?php

include 'Car.php';

$automobilis = new Car();

echo $automobilis->getSpalva()."<br>";
$automobilis->setSpalva("Raudonas");
echo $automobilis->getSpalva()."<hr>";

echo $automobilis->getGreitis()."<br>";
$automobilis->setGreitis(15.2777778); // Greitis m/s t.y 55km/h
echo $automobilis->getGreitis()."<hr>";

echo $automobilis->getKuroKiekis()."<br>";
$automobilis->setKuroKiekis(40000); // mililitrai
echo $automobilis->getKuroKiekis()."<hr>";

echo $automobilis->getKuroSanaudos()."<br>";
$automobilis->setKuroSanaudos(0.10); // mililitrai / metrą
echo $automobilis->getKuroSanaudos()."<hr>";

$automobilis->setMaxGreitis(15.2777778);
$automobilis->setIsibegejimoLaikas(200);

try {
    $automobilis->vaziuoti(40000); // metrai
    echo "<br>Kuro likutis: ".$automobilis->getKuroKiekis();
} catch (\Exception $e) {
    echo $e->getMessage();
}

<?php
$paper = array("Copier", "Inject", "Laser", "Photo");
$j = 0;
foreach ($paper as $value)
{
    echo $j . ":" . $value . "<br>";
    $j++;
}

$paper2 = array('Copier' => "Copier & Multipurpose",
    'inject' => "Inject Printer",
    'Laser' => "Laser Printer",
    'Photo' => "Potographic Paper");
foreach ($paper2 as $value => $description)
{
    echo $value . ": " . $description . "<br>";
}
?>

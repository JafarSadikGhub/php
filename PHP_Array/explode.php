<?php
$st = "Ho Holo HoHaHe Hommo SapaHo";
$stLo = strtolower($st);
$temp = explode("ho", $stLo);
$temp1 = explode("***", "A***Sentence***With***asterisks***");
print_r($temp);
print_r($temp1);
?>

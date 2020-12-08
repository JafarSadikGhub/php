<?php
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
//or we could put 0,1,2,3 index explicitly in the array. that would work, too!
//print_r($paper);
for($j = 0; $j<4; $j++)
{
     echo $j .":" . $paper[$j]. "<br>";
}
?>

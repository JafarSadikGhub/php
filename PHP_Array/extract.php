<?php
$a = "Hello";
$calling = array('a' => 'catto', 'b' => 'doggo', 'c' => 'horso');
extract($calling);
foreach ($calling as $item)
{
    echo $item."<br>";
}
echo $a;

?>
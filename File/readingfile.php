<?php
$fh = fopen('testfile.txt', 'r') or die("Error!");

$line = fgets($fh);
$text = fread($fh, 3);

fclose($fh);
echo $line. "<br>";
echo $text;
?>
<?php
echo '<pre>';
$h = 'Rasmus';
$d = 'Rasmus Lerdorf';

printf("[%s]\n", $h);
printf("[%12s]\n", $h);
printf("[%-12s]\n", $h);
printf("[%012s]\n", $h);
printf("[%'#12s]\n", $h);
printf("[%12.8s]\n", $d);
printf("[%-12.12s]\n", $d);
printf("[%-'@12.10s]\n", $d);
echo '</pre>';
echo date("l F jS, Y - g:ia", time());
?>

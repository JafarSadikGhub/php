<?php
$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);
print_r(compact(explode(' ', 'fname sname planet system constellation')));
?>

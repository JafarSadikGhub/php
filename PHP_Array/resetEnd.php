<!DOCTYPE html>
<html>
<body>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people) . "<br>";

echo reset($people);
echo '<br>';
echo end($people);
?>

</body>
</html>
<html>
<head>
</head>
<body>
<?php
copy('textfile.txt', 'textfile2.txt') or die("Couldn't copy file");
echo "File successfully copied to the folder.<br>";
?>
</body>
</html>

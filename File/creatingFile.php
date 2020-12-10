<?php
$fh = fopen("testfile.txt", 'w') or die("Failed to create file.");
    $text = <<<_END
Line1
Line2
Line3
Line4
_END;
fwrite($fh, $text) or die("Couldn't write to file.");
fclose($fh);
echo "file 'textfile.txt' was created successfully!";
?>

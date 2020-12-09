<?php
$chessboard = array(
    
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
);
//$chessboard1 = shuffle($chessboard);
//echo "<pre";
foreach($chessboard as $raw)
{
    foreach($raw as $piece)
    {
        echo $piece;
    }
    echo '<br>';
}
echo "NC: " . count($chessboard) . "<br>";
echo "DC: " . count($chessboard, 1) . "<br>";
//echo "</pre>";
?>


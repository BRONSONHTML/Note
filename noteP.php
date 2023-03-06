<?php
$note = $_POST['note'];
$file = 'notes.txt';
$current = file_get_contents($file);
$current .= $note . "\n";
file_put_contents($file, $current);
echo "Note saved!";
?>

<?php
// open the file in a binary mode
$name = '24.3.jpg';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
readfile($name);
exit;
?>
<?php
/*
 Recreate the poc.jpg after embed the PHP backdoor
 */
$jpg = imagecreatefromjpeg('edited.jpg');
imagejpeg($jpg, 'poc.jpg', 70);
imagedestroy($jpg);
?>

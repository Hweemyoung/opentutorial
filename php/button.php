<?php
header('Content-type: image/png');
$string = $_GET['text'];
$img = imagecreatefrompng('./button.png');
$orange = imagecolorallocate($img, 60, 87, 156);
$px = imagesx($img) - 7.5 * strlen($string);
imagestring($img, 4, $px, 9, $string, $orange);
imagepng($img);
imagedestroy($img);
?>
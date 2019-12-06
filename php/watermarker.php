<?php
header('Content-type: image/png');

// echo count($_FILES).'<br>';
// echo var_dump($_FILES);
// exit;

if(!count($_FILES)){
    $img_target = imagecreatefrompng('./uploads/reference_encoder_architecture.png');
} else {
    $img_target = imagecreatefrompng($_FILES['userfile']['tmp_name']);
}

// imagepng($img_target);
// imagedestroy($img_target);
// exit;

$img_stamp = imagecreatefrompng('./stamp.png');

$margin_right = 10;
$margin_bottom = 10;

$sx = imagesx($img_stamp);
$sy = imagesy($img_stamp);

imagecopy($img_target, $img_stamp, imagesx($img_target) - $sx - $margin_right, imagesy($img_target) - $sy - $margin_bottom, 0, 0, $sx, $sy); // imagecopy is an In-place operation. // Return: ?

imagepng($img_target);
imagedestroy($img); // Free memory.
?>
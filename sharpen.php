<?php

// Load the original image
$src = imagecreatefromjpeg('uploads/picture.jpg');

// Get the dimensions of the image
$width = imagesx($src);
$height = imagesy($src);

// Create a new image
$dst = imagecreatetruecolor($width, $height);

// Create the convolution matrix for sharpening
$sharpen = array(
    array(-20, -20, -20),
    array(-20, -29, -20),
    array(-20, -20, -20),
//   array(-1, -1, -1),
//   array(-1, 9, -1),
//   array(-1, -1, -1)
);

// Apply the convolution matrix
imageconvolution($dst, $sharpen, 8, 0);

// Copy the original image onto the sharpened image
imagecopy($dst, $src, 0, 0, 0, 0, $width, $height);

// Save the sharpened image
imagejpeg($dst, 'uploads/sharpened.jpg');

// Clean up
imagedestroy($src);
imagedestroy($dst);

header("Location: index.php");
header("Refresh:0");

?>
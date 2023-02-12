<?php

// Load the original image
$src = imagecreatefromjpeg('uploads/picture.jpg');

// Get the dimensions of the image
$width = imagesx($src);
$height = imagesy($src);

// Create a new image
$dst = imagecreatetruecolor($width, $height);

for ($y = 0; $y < $height; $y++) {
  for ($x = 0; $x < $width; $x++) {
    // Get the color for the current pixel
    $rgb = imagecolorat($src, $x, $y);
    $r = 255 - (($rgb >> 16) & 0xFF);
    $g = 255 - (($rgb >> 8) & 0xFF);
    $b = 255 - ($rgb & 0xFF);

    // Allocate the color
    $color = imagecolorallocate($dst, $r, $g, $b);

    // Set the color for the current pixel
    imagesetpixel($dst, $x, $y, $color);
  }
}

// Save the negative image
imagejpeg($dst, 'uploads/negative.jpg');

// Clean up
imagedestroy($src);
imagedestroy($dst);

header("Location: index.php");
header("Refresh:0");

?>
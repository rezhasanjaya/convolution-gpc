<?php

// Load the original image
$src = imagecreatefromjpeg('uploads/picture.jpg');

// Get the dimensions of the image
$width = imagesx($src);
$height = imagesy($src);

// Create a new image
$dst = imagecreatetruecolor($width, $height);

// Define the grayscale conversion matrix
$matrix = array(
  array(0.2989, 0.5870, 0.1140),
  array(0.2989, 0.5870, 0.1140),
  array(0.2989, 0.5870, 0.1140)
);

// Normalize the matrix
$divisor = array_sum(array_map('array_sum', $matrix));

// Perform convolution
for ($y = 0; $y < $height; $y++) {
  for ($x = 0; $x < $width; $x++) {
    // Get the color for the current pixel
    $rgb = imagecolorat($src, $x, $y);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;

    // Compute the convolution sum
    $sumR = $r * $matrix[0][0] + $g * $matrix[0][1] + $b * $matrix[0][2];
    $sumG = $r * $matrix[1][0] + $g * $matrix[1][1] + $b * $matrix[1][2];
    $sumB = $r * $matrix[2][0] + $g * $matrix[2][1] + $b * $matrix[2][2];

    // Normalize the sum
    $sumR /= $divisor;
    $sumG /= $divisor;
    $sumB /= $divisor;

    // Allocate the grayscale color
    $gray = (int)($sumR + $sumG + $sumB);
    $color = imagecolorallocate($dst, $gray, $gray, $gray);

    // Set the grayscale color for the current pixel
    imagesetpixel($dst, $x, $y, $color);
  }
}

// Save the grayscale image
imagejpeg($dst, 'uploads/grayscale.jpg');

// Clean up
imagedestroy($src);
imagedestroy($dst);

header("Location: index.php");
header("Refresh:0");

?>
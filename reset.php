<?php

// Define the path to the folder containing the images
$folder = 'uploads/';

// Open the folder
$handle = opendir($folder);

// Loop through all the files in the folder
while (false !== ($entry = readdir($handle))) {
  // If the file is an image, delete it
  if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $entry)) {
    unlink($folder . $entry);
  }
}

// Close the folder
closedir($handle);

header("Location: index.php");
header("Refresh:0");
?>
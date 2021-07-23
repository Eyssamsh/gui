<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]))
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false)
  {
    $uploadOk = 1;
  }
  else
  {
    echo("File is not an image!");
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file))
{
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}

  // Check file size
  $max_size = 150e6; // 150mb
if ($_FILES["fileToUpload"]["size"] > $max_size)
{
    echo("File too big! Max " . $max_size . " bytes!");
    $uploadOk = 0;
}

  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "bmp" && $imageFileType != "webp")
{
  echo "Sorry, only JPG, JPEG, PNG, WEBP, BMP & GIF files are allowed. You submitted: " . $imageFileType;
  $uploadOk = 0;
}

if ($uploadOk != 0)
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        // all good
    }
}

?>

<?php
include "upload.php";

if ($uploadOk)
{  
    $converted_file_name = $target_file . ".bmp";
    // convert to bmp
    system("convert '" . $target_file . "' -type truecolor '" . $converted_file_name . "'");

    // stylize
    system("./scribbles '" . $converted_file_name . "'");

    // serve it hot and fresh
    $stylized_name = $converted_file_name . ".conv.bmp";
    header("Content-type: image/bmp");
    $image = readfile($stylized_name);

    // delete files on server
    unlink($target_file);
    unlink($converted_file_name);
    unlink($stylized_name);
}
else
{
    echo("<br>what have u done");
}

?>

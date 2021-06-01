<?php

    if (isset($_GET["lang"]))
    {
        $requestedLang = $_GET["lang"];
        $local = file_get_contents("./lang/loc/" . $requestedLang . ".json");
    }
    else
    {
        $local = NULL;
    }
    
    // Load fallback language
    if (!$local)
        $local = file_get_contents("./lang/loc/dede.json");

    $local = json_decode($local, true);
?>

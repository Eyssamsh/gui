<?php
    $requestedLang = $_GET["lang"];
    $local = file_get_contents("./lang/loc/" . $requestedLang . ".json");

    // Fallback language
    if (!$local)
        $local = file_get_contents("./lang/dede.json");

    $local = json_decode($local, true);
?>

<?php
    $requestedLang = $_GET["lang"];
    $local = file_get_contents("./lang/" . $requestedLang . ".json");

    // Fallback language
    if (!$local)
        $local = file_get_contents("./lang/enus.json");

    $local = json_decode($local, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scribbles</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/typo.css">
    <link rel="stylesheet" href="styles/ddropform.css">
    <link rel="stylesheet" href="styles/modular.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/lang-selector.css">
</head>
<body>

    <div class="lang-selector d-flex">
        <div class="lang"><a href="?lang=dede">de</a></div>
        <div class="lang"><a href="?lang=enus">us</a></div>
    </div>

    <h1 class="headline">
        <?php echo($local["body"]["headline"]) ?>
    </h1>

    <div class="d-flex justify-center w-full" style="margin-top: 60px;">
        <form class="box ddropform has-advanced-upload" method="post" action="/api/convert.php" enctype="multipart/form-data">
            <div class="input d-none">
                <input class="file" type="file" name="fileToUpload" id="fileToUpload" data-multiple-caption="{count} files selected" multiple />
                <label for="file"><strong>Choose a file</strong><span class="dragndrop"> or drag it here</span>.</label>
                <button class="" type="submit">Upload</button>
            </div>

            <div class="dropbox-tip d-flex flex-col justify-center h-full">
                <p>
                    <?php echo($local["body"]["dropbox-tip"]) ?>
                </p>
            </div>
        </form>
    </div>

    <div class="d-flex justify-center">
        <p class="description">
            <?php echo($local["body"]["description"]) ?>
        </p>
    </div>

    <!-- Footer -->

    <div class="footer">

        <div class="logo">
            Scribbles
            <div class="dash w-full"></div>
        </div>

        <div class="d-flex">
            
            <div class="column">
            </div>

            <div class="column credits">
                Leon Etienne<br>
                Issam Charef<br>
            </div>

            <div class="column dummy">
                <?php echo($local["footer"]["link_col"]["about_us"]) ?><br>
                <?php echo($local["footer"]["link_col"]["faq"]) ?><br>
                <?php echo($local["footer"]["link_col"]["carreers"]) ?><br>
                <?php echo($local["footer"]["link_col"]["data_protection"]) ?><br>
                <?php echo($local["footer"]["link_col"]["imprint"]) ?><br>
            </div>

            <div class="column">
                <div>
                    <?php echo($local["footer"]["email_col"]["slogan"]) ?>
                </div>
                <input type="email" name="dummy_mail" placeholder=" <?php echo($local["footer"]["email_col"]["placeholder"]) ?>" id="">
            
                <div class="btn-submit-mail">
                    <div class="flex flex-col justify-center h-full">
                        <?php echo($local["footer"]["email_col"]["button"]) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="scripts/jquery.js"></script>
    <script src="scripts/ddrop.js"></script>
</body>
</html>

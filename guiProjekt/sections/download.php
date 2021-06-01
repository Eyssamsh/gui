
<?php
    // Shortcut
    $local_sctnDown = $local["body"]["downloads"];
?>

<section class="app-download section-padding" data-scroll-index="5" id="herunterladen">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2><?php echo($local_sctnDown["title"]); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-sm-3">
                <div class="app-download-item">
                    <i class="fab fa-github"></i>
                    <h3><?php echo($local_sctnDown["github"]["title"]); ?></h3>
                    <p><?php echo($local_sctnDown["github"]["description"]); ?></p>
                    <a href="https://github.com/Eyssamsh/gui" target="_blank" class="btn btn-2"><?php echo($local_sctnDown["button-text"]); ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-sm-3 mb-0">
                <div class="app-download-item">
                    <i class="fab fa-windows"></i>
                    <h3><?php echo($local_sctnDown["winzip"]["title"]); ?></h3>
                    <p><?php echo($local_sctnDown["winzip"]["description"]); ?></p>
                    <a href="https://github.com/Eyssamsh/gui/archive/refs/heads/master.zip" class="btn btn-2"><?php echo($local_sctnDown["button-text"]); ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-sm-3 mb-0">
                <div class="app-download-item">
                    <i class="fab fa-linux"></i>
                    <h3><?php echo($local_sctnDown["linux"]["title"]); ?></h3>
                    <p><?php echo($local_sctnDown["linux"]["description"]); ?></p>
                    <a href="#" class="btn btn-2"><?php echo($local_sctnDown["button-text"]); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

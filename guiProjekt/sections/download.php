
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
            <div class="col-lg-4 col-md-6">
                <div class="app-download-item">
                    <i class="fab fa-github"></i>
                    <h3><?php echo($local_sctnDown["github"]["title"]); ?></h3>
                    <p>Ihr könnt unsere Applikation auf Githab ganz einfach herunterladen, in der App findet das ganze Projekt : [ AndroidApp - PhpAppDynamisch - PhpAppStatisch + JavaScriptApp ]  </p>
                    <a href="#" class="btn btn-2">Herunterladen</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="app-download-item">
                    <i class="fab fa-windows"></i>
                    <h3><?php echo($local_sctnDown["winzip"]["title"]); ?></h3>
                    <p>Für Windows Benutzer , die unsere Applikation & Beispiele direkt hier herunterladen möchten , können sie gerne auf dem Link daunten .</p>
                    <a href="#" class="btn btn-2">Herunterladen</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="app-download-item">
                    <i class="fab fa-linux"></i>
                    <h3><?php echo($local_sctnDown["linux"]["title"]); ?></h3>
                    <p>Für Linux Benutzer ,Ihr könnt die Applikation mit den Beispiele einfach auf dem Link herunterladen. </p>
                    <a href="#" class="btn btn-2">Herunterladen</a>
                </div>
            </div>
        </div>
    </div>
</section>

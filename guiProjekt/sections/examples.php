
<?php
    // Shortcut
    $local_sctnExmp = $local["body"]["examples"];
?>

<section class="features section-padding" data-scroll-index="2" id="beispiele">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8"></div>
            <div class="section-title">
                <h2><?php echo($local_sctnExmp["title"]); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel features-carousel">
                <div class="feature-item">
                    <div class="icon"> <i class="fas fa-code"></i> </div>
                    <h3><?php echo($local_sctnExmp["featureItems"]["android"]["title"]); ?></h3>
                    <p><?php echo($local_sctnExmp["featureItems"]["android"]["description"]); ?></p>
                </div>
                <div class="feature-item">
                    <div class="icon"> <i class="fas fa-code"></i> </div>
                    <h3><?php echo($local_sctnExmp["featureItems"]["php_stat"]["title"]); ?></h3>
                    <p><?php echo($local_sctnExmp["featureItems"]["php_stat"]["description"]); ?></p>
                </div>
                <div class="feature-item">
                    <div class="icon"> <i class="fas fa-code"></i> </div>
                    <h3><?php echo($local_sctnExmp["featureItems"]["php_dyn"]["title"]); ?></h3>
                    <p><?php echo($local_sctnExmp["featureItems"]["php_dyn"]["description"]); ?></p>
                </div>
                <div class="feature-item">
                    <div class="icon"> <i class="fas fa-check"></i> </div>
                    <h3><?php echo($local_sctnExmp["featureItems"]["js_stat"]["title"]); ?></h3>
                    <p><?php echo($local_sctnExmp["featureItems"]["js_stat"]["description"]); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

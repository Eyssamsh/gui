
<?php
    // Shortcut
    $local_sctnFunc = $local["body"]["functionality"];
?>

<section class="how-it-works section-padding" data-scroll-index="6" id="funktinalitaet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                   <h2><?php echo($local_sctnFunc["title"]); ?></span></h2> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="how-it-works-item line-right">
                    <div class="step">1</div>
                    <h3><?php echo($local_sctnFunc["steps"]["1"]["title"]); ?></h3>
                    <p><?php echo($local_sctnFunc["steps"]["1"]["description"]); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="how-it-works-item line-right">
                    <div class="step">2</div>
                    <h3><?php echo($local_sctnFunc["steps"]["2"]["title"]); ?></h3>
                    <p><?php echo($local_sctnFunc["steps"]["2"]["description"]); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="how-it-works-item line-right">
                    <div class="step">3</div>
                    <h3><?php echo($local_sctnFunc["steps"]["3"]["title"]); ?></h3>
                    <p><?php echo($local_sctnFunc["steps"]["3"]["description"]); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="how-it-works-item">
                    <div class="step">4</div>
                    <h3><?php echo($local_sctnFunc["steps"]["4"]["title"]); ?></h3>
                    <p><?php echo($local_sctnFunc["steps"]["4"]["description"]); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    // Shortcut
    $local_sctnFaq = $local["body"]["faq"];
?>

<section class="faq section-padding" id="einfuehrung" data-scroll-index="1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2><?php echo($local_sctnFaq["title"]); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="accordion">

                    <?php

                    foreach ($local_sctnFaq["questions"] as $key=>$question): ?>

                    <div class="accordion-item">
                        <div class="accordion-header <?php if($key != 1) echo("collapsed"); ?>" data-toggle="collapse" data-target="<?php echo("#collapse-0" . $key); ?>">
                            <h3><?php echo($question["title"]); ?></h3>
                        </div>
                        <div class="collapse <?php if($key == 1) echo("show"); ?>" id="<?php echo("collapse-0" . $key); ?>" data-parent="#accordion">
                            <div class="accordion-body">
                                <p>
                                    <?php echo($question["answer"]); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

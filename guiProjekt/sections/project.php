
<?php
    // Shortcut
    $local_sctnProj = $local["body"]["project"];
?>

<section class="fun-facts section-padding" data-scroll-index="3" id="projekt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
                <div class="fun-facts-img">
                    <img src="images/deutsch.png" alt="Img App">
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="section-title">
                    <h2><?php echo($local_sctnProj["title"]); ?></h2>
                </div>
                <div class="fun-facts-text">
                       <p>
                            <?php echo($local_sctnProj["description"]); ?>
                       </p>
                       
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="fun-fact-item style-1">
                                   <h3>html</h3>
                               </div>
                           </div>
                             <div class="col-sm-6">
                               <div class="fun-fact-item style-2">
                                   <h3>css3</h3>
                               </div>
                           </div>
                             <div class="col-sm-6">
                               <div class="fun-fact-item style-3">
                                   <h3>Bootstrap</h3>
                               </div>
                           </div>
                             <div class="col-sm-6">
                               <div class="fun-fact-item style-4">
                                   <h3>JavaScript</h3>
                               </div>
                           </div>
                       </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</section>

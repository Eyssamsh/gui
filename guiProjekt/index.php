<?php include('./header.php'); ?>

<?php
    // Shortcut
    $local_sctnHome = $local["body"]["home"];
?>

<!-- Home Section Start -->
<section class="home d-flex align-items-center" data-scroll-index="0" >
    <div class="effect-wrap">
        <i class="fas fa-plus effect effect-1"></i>
        <i class="fas fa-plus effect effect-2"></i>
        <i class="fas fa-circle-notch effect effect-3"></i>
    </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="home-text">
                        <h1><?php echo($local_sctnHome["title"]); ?></h1>
                        <p><?php echo($local_sctnHome["description"]); ?></p>
                        <div class="home-btn">
                            <a href="#"  data-scroll-goto="5"  class="btn btn-1"><?php echo($local_sctnHome["buttonText"]); ?></a>
                            <button type="button" class="btn btn-1 video-play-btn" >
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5 text-center">
                     <div class="home-img">
                         <div class="circle"></div>
                         <img src="images/deutsch.png" alt="Img App">
                     </div>
                </div>
            </div>
        </div>
</section>

<!--
    Render all sections.
    Not via a shell-glob to preserve order
-->
<?php
        include 'sections/faq.php';
        include 'sections/examples.php';
        include 'sections/project.php';
        include 'sections/screenshots.php';
        include 'sections/download.php';
        include 'sections/functionality.php';
        include 'sections/team.php';
?>

<div class="video-popup">
    <div class="video-popup-inner">
        <i class="fas fa-times video-popup-close"></i>
        <div class="iframe-box">
            <iframe id="player-1" src="https://www.youtube.com/embed/ZbZSe6N_BXs" 
                    title="YouTube video player" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Video Popup End -->
<?php include('./footer.php'); ?>

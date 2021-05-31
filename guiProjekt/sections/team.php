
<?php
    // Shortcut
    $local_sctnTeam = $local["body"]["team"];
?>

<section class="team section-padding" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2><?php echo($local_sctnTeam["title"]); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="owl-carousel team-carousel">
                <div class="team-item">
                    <img src="images/test.JPG" alt="Team">
                    <h3>Issam Charef</h3>
                    <span><?php echo($local_sctnTeam["labels"]["ainf"]); ?></span>
                </div>
                <div class="team-item">
                    <img src="images/11.jpeg" alt="Team">
                    <h3>Leon Etienne</h3>
                    <span><?php echo($local_sctnTeam["labels"]["dainf"]); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

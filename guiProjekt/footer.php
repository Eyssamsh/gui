
<?php
    // Shortcut
    $local_sctnFoot = $local["footer"];
?>

    <!-- Footer Start  -->
    <section class="footer">
        <div class="container">
            <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <h3><?php echo($local_sctnFoot["about"]["title"]); ?></h3>
                            <p><?php echo($local_sctnFoot["about"]["text"]); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <h3>Team</h3>
                            <ul>
                                <li><a href="http://charef.de">Issam Charef</a></li>
                                <li><a href="#">Leon Etienne</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <h3><?php echo($local_sctnFoot["quicklinks"]["title"]); ?></h3>
                            <ul>
                                <?php $local_navEntr = $local["head"]["navbar"]["items"]; ?>

                                <li><a href="#einfuehrung"><?php echo($local_navEntr["home"]) ?></a></li>
                                <li><a href="#beispiele"><?php echo($local_navEntr["intro"]) ?></a></li>
                                <li><a href="#projekt"><?php echo($local_navEntr["examples"]) ?></a></li>
                                <li><a href="#screenshots"><?php echo($local_navEntr["screenshots"]) ?></a></li>
                                <li><a href="#herunterladen"><?php echo($local_navEntr["download"]) ?></a></li>
                                <li><a href="#funktinalitaet"><?php echo($local_navEntr["functionality"]) ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <h3><?php echo($local_sctnFoot["jury"]["title"]); ?></h3>
                            <ul>
                                <?php foreach ($local_sctnFoot["jury"]["jurors"] as $juror): ?>
                                    <li><?php echo($juror); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="copyright-text">&copy;2021 @ Issam Charef - Leon Etienne </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>       
 
    <!-- Footer End -->
    <!-- Toggle Theme Start -->
    <div class="toggle-theme">
        <i class="fas"></i>
    </div>
    <div class="francais-theme">
        <img src="images/francaissprache.png" alt="englisch">
    </div>
    <!-- Toggle Theme End -->
    <div class="deutsch-theme">
        <img src="images/deutschsprache.png" alt="englisch">
    </div>
    <!-- Toggle Theme End -->
    <div class="englisch-theme">
        <img src="images/englischesprache.png" alt="englisch">
    </div>
    <!-- Toggle Theme End -->

    <!-- JQuery include -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap include -->
    <script src="js/bootstrap.min.js" ></script>
     <!-- Popper Js -->
    <script src="js/popper.min.js" ></script>
    <!-- Main Javascript -->
    <script src="js/main.js" ></script>
    <!-- OWL Carousel -->
    <script src="js/owl.carousel.min.js" ></script>
    <!-- Scrollit Js -->
    <script src="js/scrollIt.min.js" ></script>
   
  </body>
</html>
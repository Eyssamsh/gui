<?php include_once 'lang/loadLang.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Issam CHAREF">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <title> <?php echo($local["head"]["title"]) ?> </title>
    <!-- Owl Carousel -->
     <link href="css/owl.carousel.min.css" rel="stylesheet" >
    <!-- Font Awesome Icons -->
    <link href="css/font-awesome.css" rel="stylesheet" >

    <!-- Bootstrap core CSS -->
   
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/star_template.css" rel="stylesheet" >
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" >
 
  </head>
  
  <body>
      <!-- Preloader start -->
      <div class="preloader">
          <span></span>
      </div>
      <!-- Preloader End -->

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#" ><?php echo($local["head"]["navbar"]["title"]) ?></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Navbar links -->

                <?php $local_navEntr = $local["head"]["navbar"]["items"]; ?>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" data-scroll-nav="0"><?php echo($local_navEntr["home"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="1"><?php echo($local_navEntr["intro"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="2"><?php echo($local_navEntr["examples"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="3"><?php echo($local_navEntr["project"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="4"><?php echo($local_navEntr["screenshots"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="5"><?php echo($local_navEntr["download"]) ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-scroll-nav="6"><?php echo($local_navEntr["functionality"]) ?></a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
      
      <!-- Navbar end -->
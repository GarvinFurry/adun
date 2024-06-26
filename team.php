<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | ADUN");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style="background-image: url('img/OMEN Aero.png')">
            <div class="container">
              <h1 class="display-3">The ADUN Creators</h1>
              <h4>The Brains behind all this</h4>
              <h1><a href="https://github.com/GarvinFurry">
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </a> &raquo;</h1>
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind ADUN</h3>
              <h2 class="mb-5">The Team</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="_ADUN creators/Garvin.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Animam Garvin Chinedu</h2>
                      <p class="mb-0 text-white">The Border is Black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/black-bg.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_ADUN creators" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>DR. Kingsley</h2>
                      <p class="mb-0 text-white">My Supervisor</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/black-bg.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_ADUN creators" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Professor Paul Omojo Omaji</h2>
                      <p class="mb-0 text-white">My VC</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/black-bg.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_ADUN creators" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Dr.Ezekwe</h2>
                      <p class="mb-0 text-white">My HOD</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/black-bg.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>
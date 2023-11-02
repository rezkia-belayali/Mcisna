<?php $bdd = new PDO('mysql:host=localhost;dbname=mcisna;charset=utf8', 'root', ''); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Site Officiel de la commune de M'Cisna</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="accueil.php">M'Cisna</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <!--<a href="accueil.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
       <a href="accueil.php" class="get-started-btn">Accueil</a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Presentation de l'APC</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="assemble.php">Assemblée communale</a></li>
              <li><a href="administration.php">Administration communale</a></li>
              
            </ul>
          </li>
          
          <li><a href="dcv.php">Decouvrir M'Cisna</a></li>

          <li class="dropdown"><a href="Services.php"><span>Services de l'APC</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="civil.php">Etat civil </a></li>
              <li><a href="bio.php">Document biométrique</a></li>
              <li><a href="urbanisme.php">Urbanisme</a></li>
              <li><a href="social.php">Affaires Sociales</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="Projets.php"><span>Projets de l'APC</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Projets.php">Projets deja realiser</a></li>
              <li><a href="Projets.php">Projets en cours</a></li>
              <li><a href="actualites.php">Actualites</a></li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="contact.php" class="get-started-btn">contact</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Site Officiel<br>de la commune M'Cisna</h1>
      <a href="contact.php" class="btn-get-started">contact</a>
    </div>
    </section><!-- End Hero -->
    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php
          $recupArticles = $bdd->query('SELECT * FROM articles ORDER BY created_at DESC LIMIT 2');
      
          while ($article = $recupArticles->fetch()) :
          ?>
            <article class="entry">


              <div class="entry-img">

                <div class="article">
                </div>

              </div>

              <h2 class="entry-title">
                <a href="#"><?php echo $article['titre'] ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    
                      <time datetime="2020-01-01"><?php echo $article['created_at']; ?></time>
                    
                  </li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $article['description']; ?>
                </p>
                <?php if ($article["fichier"]) : ?>
                  <div class="read-more">
                    <a href="<?php echo "../update/" . $article["fichier"]; ?>">Détails</a>
                  </div>
                <?php endif; ?>
              </div>

            </article><!-- End blog entry -->
          <?php
          endwhile;
          ?>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Appel d'offre</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/avis d'A.O.jpg" alt="">
                  <h4><a href="assets/img/avis d'A.O.jpg">
                    "Revêtement en béton bitumineux du chemin communal  reliant Imoula-Asseghli 
                    sur 3,500Km"
                    </a></h4>
                  <time datetime="2020-01-01">Jan 1, 2021</time>
                </div>

              
              </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->
              <br><br>
              <img src="assets/img/carteG.PNG" class="img-fluid" alt="" width="550px" height="600px">
              <br><br>
          
              <a class="weatherwidget-io" href="https://forecast7.com/fr/36d564d71/msisna/" data-label_1="M'CISNA" data-label_2="Météo" data-theme="sky" data-basecolor="#5fcf80" data-highcolor="#ea0000" data-lowcolor="" data-cloudfill="#5fcf80" >M'CISNA Météo</a>
              <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
              </script>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/photo.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Bienvenue sur le site Officiel de l'APC </h3>
            <p class="fst-italic">
              Azul fell-awen. Ici vous trouverez tous sur votre APC 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Nom : ⵉⵎⵙⵉⵙⴻⵏ - M'Cisna - مسيسنة</li>
              <li><i class="bi bi-check-circle"></i> Daira : Seddouk</li>
              <li><i class="bi bi-check-circle"></i> Wilaya : Bejaia</li>
              <li><i class="bi bi-check-circle"></i> Pays : Algérie</li>
              <li><i class="bi bi-check-circle"></i>Présedent de l'APC : Karim Kabache</li>
              <li><i class="bi bi-check-circle"></i>Superficie : 39,12 km² </li>
              <li><i class="bi bi-check-circle"></i>Code postal : 06038 </li>
              <li><i class="bi bi-check-circle"></i>Altitude : Min. 600 m; Max. 700 m</li>

            </ul>
            <p>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="8500" data-purecounter-duration="1" class="purecounter"></span>
            <p>Habitants</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
            <p>Nombre de Villages</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="39.12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Surface</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projets en 2021</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Decouvrir M'Cisna !!</h3>
              <p>
                M'Cisna anciennement Sidi Said , est une commune algérienne . Notre commune est limitée au nord par les communes de Leflaye, Sidi Ayad et Timzrit. A l'est par la commune de Beni Djellil, au Sud-est par la commune de Beni Maouche et au Sud-ouest par la commune de Seddouk.
              </p>
              <div class="text-center">
                <a href="decouvrir.php" class="more-btn">voir plus<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <img src="assets/siege.jpeg.jpg">
            </div><!---End .content-->
        

      </div>
   </section><!--- End Why Us Section -->
  

  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">GALERIE</h2>
            <h3 class="section-subheading text-muted">Voici quelques photos de la commune.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/amagaz.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/2.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/3.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/5.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/6.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/images/7.jpg" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section></main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row"> 

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>M'Cisna</h3>
          <p>
            chef-lieu Sidi Saïd<br>
            M'Cisna<br>
            Seddouk <br><br>
          
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Liens Utiles</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="accueil.php">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="Services.php">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="Projets.php">Projets</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="civil.php">Etat civil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="bio.php">Document biométrique</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="urbanisme">Urbanisme</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="social">Affaires Sociales</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Contactez nous</h4>
          <a href="contact.php" class="get-started-btn">Contact</a><br><br><br>
          <p>
            <strong>Phone:</strong> 034 89 63 27<br>
            <strong>Email:</strong> commune.mcisna.sg@gmail.com<br>
          </p>  
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>M'Cisna</span></strong>. Tous droits réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        Designed by <a href="#">Belayali Rezkia Kenza</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
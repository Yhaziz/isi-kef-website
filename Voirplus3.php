<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Institut Supérieur d'Informatique du Kef</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/isi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-envelope"></i>isikef@isikef.u-jendouba.tn
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> (+216) 78 201 056
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto"><img src="assets/img/logoisi.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.php">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Accueil</a></li>
          <li class="dropdown">
            <a><span>Notre Institut</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="index.php#about">Présentation</a></li>
              <li><a class="nav-link scrollto" href="index.php#features">Mot du Directeur</a></li>
              <li><a class="nav-link scrollto" href="index.php#services">Organigramme administratif</a></li>
              <li><a class="nav-link scrollto" href="index.php#gallery">GALERIE</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#departments">NOS ACTUALITÉS</a></li>
          <li><a class="nav-link scrollto" href="index.php#blog-section">Evénement</a></li>
          <li><a class="nav-link scrollto" href="index.php#Professeurs">Professeurs</a></li>
          <li class="dropdown">
            <a><span>Vie estudiantine</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="Activités culturelles.php">Activités culturelles</a></li>
              <li><a class="nav-link scrollto" href="Activités sportives.php">Activités sportives</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Nous Contacter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <?php
              session_start();

              if(isset($_SESSION['np'])){
                echo "<button class='appointment-btn scrollto'>" . "".$_SESSION['np']."</button>";
                  echo "<button class='appointment-btn scrollto' onclick=\"window.location.href='php/logout.php'\">Déconnexion</button>";
              } else {
                  echo "<button class='appointment-btn scrollto' onclick=\"window.location.href='Inscrivez-vous.php'\">Inscrivez-vous</button>";
              }
              ?>

    </div>
  </header><!-- End Header -->

  <br><br><br><br><br>
            <!--Voir plus-->
            

            <section class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                      <div class="blog_entry">
                        <a href="#"><img src="assets/img/event/e7.jpg" alt="e7" class="img-fluid"></a>
                        <div class="p-4 bg-white">
                          <h3><a href="#">à venir</a></h3>
                          <span class="date">à venir</span>
                          <p>à venir</p>
                          <p class="more"><a href="#">En savoir plus ...</a></p>
                        </div>
                      </div>
                    </div>


            
                  <div class="row">
                    <div class="col-12 text-center">
                      <a href="Voirplus.php" class="p-3">1</a>
                      <a href="Voirplus2.php" class="p-3">2</a>
                      <a href="Voirplus3.php" class="p-3">3</a>
                    </div>
                  </div>
                </div>
            
              </section>
            
            
            <!--==Voir plus==-->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nous Contacter</h2>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12882.049277207652!2d8.7105249!3d36.1784203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fba44eb16009e5%3A0xea46e94b9ed2cde8!2sHigher%20Institute%20of%20Computer%20Science%20of%20Kef!5e0!3m2!1sen!2stn!4v1680751572813!5m2!1sen!2stn" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Notre adresse</h3>
                  <p>5 Rue Saleh Ayech - 7100 Kef</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Envoyez-nous un email</h3>
                  <p>isikef@isikef.u-jendouba.tn</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Appelez-nous</h3>
                  <p> (+ 216) 78 201 056<br> (+ 216) 78 200 237</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="https://formspree.io/f/mjvdpbro" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="nom et prénom" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Adresse Mail" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="Sujet" id="subject" placeholder="Sujet" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Votre Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ISI KEF</h3>
              <p>
                5 Rue Saleh Ayech - 7100 Kef
                <br><br>
                <strong>Tél.: </strong>(+ 216) 78 201 056<br>
                <strong>Fax : </strong>(+ 216) 78 200 237<br>
                <strong>E-mail:</strong> isikef@isikef.u-jendouba.tn<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/profile.php?id=100057592473413" class="facebook"><i class="bx bxl-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.mes.tn/">MES</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.erasmusplus.tn/">Erasmus +</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.ooun.rnu.tn/web/ar/index.php">Office des Oeuvres Universitaires Pour le Nord</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.orientation.tn/orient/">Orientation universitaire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.uj.rnu.tn/Ar/%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AC%D8%AF%D8%A7%D8%AA_46_4">Université de Jendouba</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www4.inscription.tn/">Inscription Universitaire en ligne</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Autre lien</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="projera.php">Projet Erasmus+</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="4c.php">4C</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Droit d'accès aux informations.php">Droit d'accès aux informations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="calendrier.php">calendrier</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <form action="Newsletter.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yahyaoui Med Aziz</span></strong>. Tous les droits sont réservés
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
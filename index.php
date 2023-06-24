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
          <li><a class="nav-link scrollto" href="#hero">Accueil</a></li>
          <li class="dropdown">
            <a><span>Notre Institut</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">Présentation</a></li>
              <li><a class="nav-link scrollto" href="#features">Mot du Directeur</a></li>
              <li><a class="nav-link scrollto" href="#services">Organigramme administratif</a></li>
              <li><a class="nav-link scrollto" href="#gallery">GALERIE</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#departments">NOS ACTUALITÉS</a></li>
          <li><a class="nav-link scrollto" href="#blog-section">Evénement</a></li>
          <li><a class="nav-link scrollto" href="#Professeurs">Professeurs</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide1.jpg)">
          <div class="container">
            <h2>Bienvenue chez <span>ISI KEF</span></h2>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide2.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide3.jpg)">
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="container">
          <h2>Nos Formations</h2>
          <br>
        </div>
        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-code"></i></div>
              <br>
              <h4 class="title"><a>LCS</a></h4>
              <p class="description">Cette Licence Intitulé "Computer Science" Comprend Deux Spécialités :<br><br>Génie Logiciel Et Système D'Information : <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=UUkDTl9wB2ZdbFAqDjJWZVRyXGI=&etab=Wj9Waw05">GL</a><br><br> <p>Informatique et Multimédia : <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=VU1ZFAwjUTBXZlIoAT1RYgguDTI=&etab=BGEEOVxo">IM</a></p>
            </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fas fa-server"></i></div>
                <br>
                <h4 class="title"><a>LCE</a></h4>
                <p class="description">Licence en Computer Engineering <br><br>Cette Licence Contient une seule Spécialité :  <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=AxtSH11yBGVVZFErVGhQYAQiCzQ=&etab=UDUEOQw4">Ingénierie des réseaux et systèmes</a></p>
              </div>
              </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <br>
              <h4 class="title"><a>SIW</a></h4>
              <p class="description">Mastère de Recherche en Systèmes d'Informations et Web : <br><br> <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2256">Plan d'études du Mastère de recherche en systèmes d'informations et web</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-shield-alt"></i></div>
              <br>
              <h4 class="title"><a>ASRI</a></h4>
              <br>
              <p class="description">Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques <br><br> <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2215">Pour plus de détails sur le parcours - ASRI</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa-solid fa-mobile-screen"></i></div>
              <br>
              <h4 class="title"><a>AWI</a></h4>
              <br>
              <p class="description"><a href="#">Mastère Professionnel en Application Web Intelligente</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa-solid fa-wheat-awn"></i></div>
              <br>
              <h4 class="title"><a>NTICDIA</a></h4>
              <br>
              <p class="description">Mastère Co-Construite en Nouvelles Technologies <br> de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture<br><br><a href="http://www.isikef.rnu.tn/Fr/image.php?id=2224"> Pour plus de détails sur le Parcours - NTICDIA</a></p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Featured Services Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Présentation</h2>
          <p>Institut Supérieur d'Informatique du Kef</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/presentation.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>ISI KEF</h3>
            <p class="fst-italic">
              L’Institut  Supérieur d’Informatique du Kef a été crée selon le décret n°06-1587 du 6 juin 2006 portant création d’établissements  d’enseignement supérieur et de recherche.
              <br>
              En effet, l’ISIKef est l’une des établissements universitaires de l’université de Jendouba.
            </p>
            <ul>
              <li></i> Responsables :</li>
              <li><i class="bi bi-check-circle"></i> Directeur : Mr. Hayouni Mohamed</li>
              <li><i class="bi bi-check-circle"></i> Secrétaire général : Mr. KHAMMASSI AISSA</li>
            </ul>
            <p>
              Cordonnées :<br>
              Adresse : 5 rue Salah Ayache 7100 Le Kef <br>
              Téléphone : 78 201 056    Fax : 78 200 237 <br>
              Site web : <a href="http://www.isikef.rnu.tn/Fr/accueil_46_4">www.isikef.rnu.tn </a><br>

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa-solid fa-user-graduate"></i>
              <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Etudiant</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa-solid fa-person-chalkboard"></i>
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Enseignant</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class='fas fa-building'></i>
              <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Salles de cours</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa-solid fa-graduation-cap"></i>
              <span data-purecounter-start="0" data-purecounter-end="3500" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Diplômés</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Mot du Directeur ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <h1>Mot du Directeur :</h1>
              <p>
                Je vous souhaite la bienvenue sur le site web de l’Institut Supérieur d’Informatique du Kef.
                <br>
                <br>
                Ce site s'enrichit régulièrement pour vous fournir les informations que vous cherchez. Que vous soyez visiteur, étudiant, personnel, enseignant, administratif ou technique, que vous cherchiez des informations sur notre offre de formation, sur les examens, sur les stages, sur l'actualité de l’institut, ... , ce site est fait pour vous.
                <br>
                <br>
                Notre Institut est reconnu pour la qualité de ses formations. Il attire chaque année plus d'étudiants et leur offre des cursus et débouchés variés.
                <br>
                <br>
                Notre plateforme est conçue pour être un espace d’échange vous donnant une image aussi fidèle que possible de ce que nous sommes et de ce qui vous attend. Votre opinion nous tient à cœur, car elle nous aidera à maintenir notre site vivant et à améliorer sa qualité.
                <br>
                <br>
                Nous espérons que la présente visite saura répondre à toutes vos attentes et interrogations, mais par-dessus tout aiguiser votre curiosité au point de communiquer avec nous. Il s’agit d’une première démarche, mais nous anticipons déjà le plaisir de vous accueillir au sein de notre institut. Il nous fera plaisir de vous accompagner tout au long de votre parcours à la recherche de l’information dont vous avez besoin.
                <br>
                <br>
                L’équipe de direction de l’Institut Supérieur d’Informatique du Kef vous souhaite une bonne visite de ce site .
                <br>
                <strong>
                  Très cordialement<br>
                  Hayouni Mohamed<br>
                  Directeur de l’Institut Supérieur d’Informatique du Kef<br>
                </strong>
              </p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/directeur.jpg");' ></div>
        </div>

      </div>
    </section><!-- End Mot du Directeur -->

    <!-- ======= Organigramme administratif ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Organigramme administratif :</h2>
            <img src="assets/img/orga.jpg" class="img-fluid" alt="">
        </div>

        </div>

      </div>
    </section><!-- End Organigramme administratif -->

    <!-- ======= Nos actualités ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos actualités</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>DEMANDE DE STAGE ETE</h4>
                  <p>DEMANDE DE STAGE ETE</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Annonce stage</h4>
                  <p>Fiche de demande de stage par specialité</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>PEEJ</h4>
                  <p>Pole etudiant entrepreneur de l'université de jendouba</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Avis Consultation PAQ-DGSE2022</h4>
                  <p>Avis Consultation PAQ-DGSE2022</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>DEMANDE DE STAGE ETE</h3>
                <p class="fst-italic">DEMANDE DE COLLABORATION POUR ACCUEILLIR LES ETUDIANTS DE L'ISIKEF EN STAGE D'ETE</p>
                <img src="assets/img/a1.jpg" alt="" class="img-fluid">
                <p><a href="http://www.isikef.rnu.tn/Fr/image.php?id=2740">DEMANDE DE COLLABORATION POUR ACCUEILLIR LES ETUDIANTS DE L'ISIKEF EN STAGE D'ETE PDF</a></p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Fiche de demande de stage</h3>
                <p class="fst-italic">Fiche de demande de stage par specialité :</p>
                <img src="assets/img/a2.jpg" alt="" class="img-fluid">
                <p>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2738">FICHE DE PROPOSITION DE STAGE</a>
                  <br><br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2736">DEMANDE DE STAGE IM</a>
                  <br><br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2734"> DEMANDE DE STAGE LIRS</a>
                  <br><br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2733"> DEMANDE DE STAGE GL</a>
                </p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>PEEJ</h3>
                <p class="fst-italic">Avis à tous les enseignants de l'Université de Jendouba</p>
                <img src="assets/img/a3.png" alt="" class="img-fluid">
                <p>
                  L'Université de Jendouba a lancé un appel à candidature pour la sélection des référents du Pole de l'Etudiant Entrepreneur PEEJ en vue de l'accompagnement des étudiants entrepreneurs dans les établissements universitaires de l'Université de Jendouba et leurs octroyer le Statut de l'Etudiant Entrepreneur selon la circulaire 42/19 du 08 Novembre 2019.
                  Pour les enseignants intéressés à être référents PEEJ, vous trouvez ci-joint:
                  -l'appel à candidature
                  -le modèle de lettre d'engagement (en version pdf et en version word)
                  Tous les détails vous les trouvez dans:
                  -la circulaire num 42/19 sur le statut de l'étudiant entrepreneur
                  -Brochure sur le Pole Etudiant Entrepreneur de l'Université de Jendouba PEEJ
                  -Brochure sur le Statut Etudiant Entrepreneur .
                  <br><br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2716">1- Statut etudiant Entrepreneur .pdf</a>
                  <br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2715">2- Pôle étudiant entrepreneur de l'université de Jendouba.pdf</a>
                  <br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2709">3- Lettre d'engagement version word.doc</a>
                  <br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2706">4- Lettre d'engagement version pdf.pdf</a>
                  <br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2704">5- Appel à candidature referent PEEJ.pdf</a>
                  <br>
                  <a href="http://www.isikef.rnu.tn/Fr/image.php?id=2699">6- Circulaire étudiant Entreprneur.pdf</a>
                  <br><br>
                  Prière de faire profiter vos étudiants et envoyez vos candidatures avant le Vendredi 18 Novembre 2022, sans la candidature des référents, ni l'établissement puisse adhérer au statut, ni l'étudiant puisse profiter !
                  Visitez la page facebook du PEEJ de l'université de Jendouba :
                  <br>
                  <a href="https://www.facebook.com/profile.php?id=100084797015942">Cliquez ici</a>
                </p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Avis Consultation PAQ-DGSE2022</h3>
                <p class="fst-italic">Avis Consultation PAQ-DGSE2022</p>
                <img src="assets/img/a4.jpg" alt="" class="img-fluid">
                <p><a href="http://www.isikef.rnu.tn/Fr/image.php?id=2694">Avis d’une consultation N°01-2022-PAQ DGSE_septembre 2022</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Nos actualités -->

    <!-- ======= Event ======= -->
    <div class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-7 mb-4 position-relative text-center mx-auto">
            <h2 class="font-weight-bold text-center">événement</h2>

        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="ev1.php"><img src="assets/img/event/e1.jpg" alt="event1" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a>Projet Voltaire</a></h3>
                <span class="date">18 octobre 2022</span>
                <p>l'évènement de demain à l'amphithéâtre à 12h pour les étudiants de 2-ème année LSI.
                  La présence est obligatoire</p>
                <p class="more"><a href="ev1.php">En savoir plus ...</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="ev2.php"><img src="assets/img/event/e2.jpg" alt="e2" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a>The Enactus Tunisia</a></h3>
                <span class="date">14 octobre 2022</span>
                <p>Chers étudiants du Kef ( ISI Kef, ISEAHK , INTSK, ESAK, ISSEPK, ISMTK, ISSIK, ISET Kef), Enactus Tunisia organisera le Mardi 18 Octobre 2022 ....</p>                
                <p class="more"><a href="ev2.php">En savoir plus ...</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="ev3.php"><img src="assets/img/event/e3.jpg" alt="e3" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a>Réussir Votre PFE </a></h3>
                <span class="date">7 mai 2022 </span>
                <p>𝐈𝐧𝐬𝐜𝐫𝐢𝐯𝐞𝐳-𝐯𝐨𝐮𝐬 et assurez votre préparation pour les projets fin d'études en gagnant les compétences nécessaires ce samedi  ...</p>
                <p class="more"><a href="ev3.php">En savoir plus ...</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 mx-auto">
            <center>
            <a href="Voirplus.php" class="btn btn-primary btn-block">Voir plus</a>
            </center>
          </div>
        </div>
      </div>
    </div>
    <!-- End Event -->

    <!-- ======= Professeurs Section ======= -->
    <section id="Professeurs" class="Professeurs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Professeurs de l'Institut Supérieur d'Informatique du Kef</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/Professeurs/1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/waritheddine.djeddi"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/waritheddine/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/warith-eddine-djeddi-59b76a33/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Warith Eddine Djeddi</h4>
                <span>Enseignant chercheur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/Professeurs/2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/jemai.ftayma"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/ftaymajemai/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/fatma-jemai-001a2a197/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fatma Jemai </h4>
                <span>Enseignante Development web</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/Professeurs/3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/emna.klai1"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/emna.klai/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Emna Klai</h4>
                <span>Enseignante Projet FD</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/Professeurs/4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/issam.bouslimi.503"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/issam-bouslimi-5082791a/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Issam Bouslimi</h4>
                <span>Enseignant et Assistant universitaire chez isi kef</span>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Professeurs Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>GALERIE</h2>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/1.jpg"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/2.jpg"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/3.jpg"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/4.jpg"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/5.jpg"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/6.jpg"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/7.jpg"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/8.jpg"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

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
                  <input type="email" class="form-control" name="email"  id="email" placeholder="Votre Adresse Mail" required="">
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
<?php

// include("testmail.php");

$json_data = file_get_contents('projets.json');
$projets = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PortFolio Stéphane Descarpentries</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoWoodisFavIcon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php"><img src="assets/img/logoWoodis.png" alt="Logo du Site" height="80px"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>

          <li class="dropdown"><a class="nav-link scrollto" href="#portfolio"><span>Projets</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach ($projets as $projet) {
                echo "<li><a href='" . $projet['link'] . "'>" . $projet['name'] . "</a></li>";
              } ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/bg-header.jpg);">
    <div class="hero route bg-image" style="background-color: rgba(0, 0, 0, 0.5);">

      <div class="overlay-itro"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="text-white display-4 mb-4">Stéphane Descarpentries</h1>
            <p class="hero-subtitle">Je suis, <span class="typed" data-typed-items="étudiant en developpement web, un développeur web créatif transformant des idées en code."></span></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-5 col-sm-12">
                  <div class="row d-flex flex-column align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <!-- <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt=""> -->
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nom:</span> <span>Descarpentries</span></p>
                        <p><span class="title-s">Prénom: </span> <span>Stéphane</span></p>
                        <p><span class="title-s">Profile: </span> <span>Ėtudiant en developpement web</span></p>
                        <p><span class="title-s">Email: </span> <span>stephane.descarpentries@lepoles.org</span></p>
                      </div>
                      <div class="col-md-12 mt-5 mb-5 btn-cv btn btn-primary">
                        <a href="assets/files/CV_D_Stephane_PortFolio.pdf" target="_blank" class="text-white">Afficher mon CV</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        A propos de moi
                      </h5>
                    </div>
                    <p class="lead">
                      Je m'appelle Stéphane Descarpentries et je suis un passionné du développement web en formation. Mon parcours m'a permis de m'immerger dans les aspects à la fois passionnants et exigeants du front-end et du back-end. Actuellement, je travaille activement pour obtenir le diplôme RNCP de développeur web et web mobile, reconnu par WebForce 3.
                    </p>
                    <p class="lead">
                      En dehors du monde du développement web, je suis fasciné par les nouvelles technologies, notamment l'intelligence artificielle et l'exploration spatiale. J'adore également les jeux vidéo et je trouve l'inspiration dans cet univers pour perfectionner mes compétences en développement. Mon objectif principal est de continuer à apprendre et à m'améliorer en tant que développeur, tout en restant ouvert aux opportunités passionnantes que le monde de la technologie a à offrir.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>

    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Projets
              </h3>
              <p class="subtitle-a">
                Voici une courte liste des projets que j'ai réaliser au cours de ma formation
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($projets as $projet) { ?>
            <div class="col-md-4">

              <a href="<?php echo $projet['link'] ?>" target="_blank">
                <div class="work-box">
                  <div class="work-img">
                    <img src="assets/imageProjets/<?php echo $projet['image'] ?>" alt="" class="img-fluid">
                  </div>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title"><?php echo $projet['name'] ?></h2>
                        <div class="w-more">
                          <span class="w-ctegory">date du projet</span> : <span class="w-date"><?php echo $projet['date'] ?></span>
                        </div>
                        <div class="w-more">
                          <span class="w-ctegory">langage utiliser</span> : <span><?php echo $projet['language'] ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-11 mt-4 w-desc">
                        <p class="w-ctegory m-0">Description :</p>
                        <p><?php echo $projet['description'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>

            </div>
          <?php } ?>


        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Envoyer moi un message
                      </h5>
                    </div>
                    <div>
                      <form action="testmail.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message à étais envoyer !</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Prendre contacte
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Étant actuellement en étude, je suis à la recherche d'une entreprise dans le secteur du
                        développement pour y effectuer
                        un stage. Si mon profil vous intéresse, vous pouvez me contacté grâce à ces informations
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Achères 78260 île-de-France</li>
                        <!-- <li><span class="bi bi-phone"></span> (617) 557-0089</li> -->
                        <li><span class="bi bi-envelope"></span> stephane.descarpentries@lepoles.org</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://github.com/Woodiss"><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-github"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/st%C3%A9phane-descarpentries-911b0628a/"><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="mailto:stephane.descarpentries@lepoles.org"><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-envelope-fill"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class=" container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Stéphane Descarpentries</strong>. Tout droit réserver</p>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
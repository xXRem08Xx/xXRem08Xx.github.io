<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Accueil";
include_once "header.php";
?>

<body>

<!-- nav bar index != nav-bar.php -->
  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="index.php"><img src="images/logo.png" alt="Myself"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projet.php">Projet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- /nav bar -->

  <!-- header page entiere -->
  <section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">Salut ! je suis <br> Rémi <br> Développeur</h1>
        </div>
      </div>
    </div>
    <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
    </div>
    <div class="layer" id="l2">
      <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="images/illustrations/dots-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
    </div>
    <div class="layer" id="l6">
      <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
    </div>
    <!-- icone de reseau social -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
    </ul>
    <!-- /icone de reseau social -->
  </section>
  <!-- /header page entiere -->

  <!-- about -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <p class="font-secondary paragraph-lg text-dark">
            Actuellement en BTS SIO (Services informatiques aux organisations),
          </p>
          <p class="font-secondary paragraph-lg text-dark">
            je me forme pour acquerir des competences dans le domaine du Web design et de la programation Logiciel afin de pouvoir entrer dans la vie
            active au seins d'une entreprise.
          </p>
          <a href="about.php" class="btn btn-transparent">En Savoir Plus</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- Competences -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Compétences</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
              <div class="wave" data-progress="60%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Conception Web (60%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
              <div class="wave" data-progress="73%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Devellopement C++ (73%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
              <div class="wave" data-progress="70%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Maitrise SQL (70%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
              <div class="wave" data-progress="35%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Dévellopement JavaScript (35%)</h4>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /Competences -->

  <!-- experience -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Expérience</h2>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-1.png" alt="icon">
          <p class="mb-0">Juin 2021</p>
          <h4>Stage de 1ère Année</h4>
          <h6 class="text-light">Dignamik</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-2.png" alt="icon">
          <p class="mb-0">Janvier 2021 - Fevrier 2021</p>
          <h4>Stage de 2ème Année</h4>
          <h6 class="text-light">Dignamik</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-3.png" alt="icon">
          <p class="mb-0">juin 2018 - Présent</p>
          <h4>Employé polyvalent en restauration</h4>
          <h6 class="text-light">7SeptPizza</h6>
        </div>
      </div>
    </div>
  </section>
  <!-- ./experience -->

  <!-- education -->
  <section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Parcourt</h2>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2020</p>
              <h4>Baccalauréat Mention Assez Bien</h4>
              <p class="mb-0 text-light">Lycée Aristide Briand à Gap</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2017</p>
              <h4>Brevet Des Collèges</h4>
              <p class="mb-0 text-light">Collège Achille Mauzan à Gap</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- bg image -->
    <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
  </section>
  <!-- /education -->

  <!-- services -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Services</h2>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-palette icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Base de données.</h4>
              <p>Création, gestion et organisation de base de données, maitrise du language SQL</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card active-bg-primary hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-vector icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Web Design</h4>
              <p>Création et gestion de sites webs en accord avec les attentes du client.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-panel icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Conception de Logiciel</h4>
              <p>Création de logiciel C++ pour support Ordinateur / Mobile </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /services -->

  <!-- portfolio -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-4.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /projet -->

  <!-- blog -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Blogs</h2>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-3.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-4.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-2.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /blog -->

  <?php
  require_once "footer.php";
  ?>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
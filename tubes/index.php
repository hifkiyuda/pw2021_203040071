<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$movies = query("SELECT * FROM movies");
$slider = query("SELECT * FROM movies");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $movies = query("SELECT * FROM movies WHERE
            `judul` LIKE '%$keyword%' OR
            `cast` LIKE '%$keyword%' OR
            `rating` LIKE '%$keyword%' OR
            `genre` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $movies = query("SELECT * FROM movies");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>plotwist</title>
    <!-- My Logo -->
    <link rel="icon" href="assets/img/plotwist.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Splide -->
    <link rel="stylesheet" href="css/splide.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <div class="navbar-item">
            <div class="title">
              <h1 class="plotwist">plotwist</h1>
            </div>
          </div>
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item nav" href="#home">
                Home
            </a>
            <a class="navbar-item nav" href="#movies">
                Movies
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link nav">
                Admin
              </a>
              <div class="navbar-dropdown">
                <div class="navbar-item">
                  <a class="button is-link is-small" href="php/login.php">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>


    <!-- Hero -->
    <section class="hero is-link" id="home">
      <div class="hero-body has-text-centered">
        <p class="title">
          Welcome to <span style="color: hsl(171, 100%, 41%);">plotwist</span>
        </p>
        <p class="subtitle">
          Home of quality movies<br>Semuanya yang terbaik untukmu, temukan dan jadikan itu kesan tak terlupakan.
        </p>
        <div class="field has-addons is-justify-content-center">
          <div class="control">
            <form action="" method="GET">
              <input class="input keyword" type="text" placeholder="Cari film favorit..." name="keyword">
              <button class="button is-white tombol-cari" type="submit" name="cari">
                <span class="icon is-small">
                  <i class="fas fa-search"></i>
                </span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Movies -->
    <div id="movies">
      <!-- Latest -->
      <section class="section" id="latest">
        <div class="title">
          <h1>Latest movies</h1>
        </div>
        <div class="splide splide-index pb-5" id="splide">
          <div class="splide__track">
            <ul class="splide__list">
            <?php foreach ($slider as $s) : ?>
              <li class="splide__slide">
                <figure class="image">
                  <img src="assets/home/<?= $s['poster']; ?>" alt="">
                </figure>
                <a class="caption" href="php/detail.php?id=<?= $s['id']; ?>">
                  <?= $s["judul"]; ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </section>

      <!-- Popular -->
      <section class="section" style="margin-top: -80px;" id="popular">
        <div class="title">
          <h1>Popular movies</h1>
        </div>
        <?php if(empty($movies)) : ?>
          <div class="title is-1">
              <p style="color: red; font-style: italic;">Film tidak tersedia</p>
          </div>
        <?php endif; ?>
        <div class="columns is-multiline is-mobile">
          <?php foreach ($movies as $mv) : ?>
          <div class="column is-4-mobile is-3-tablet is-2-desktop is-2-widescreen poster">
            <a class="image" href="php/detail.php?id=<?= $mv['id']; ?>">
              <img src="assets/img/<?= $mv['poster']; ?>" alt="">
            </a>
            <a class="caption" href="php/detail.php?id=<?= $mv['id']; ?>">
              <?= $mv["judul"]; ?>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      
      <!-- Upcoming -->
      <section class="section upcoming" style="background-color: #ECF0F1;" id="upcoming">
        <div class="title">
          <h1>Upcoming movie</h1>
        </div>
        <div class="columns">
          <div class="column">
            <figure class="image is-16by9">
              <iframe class="has-ratio" src="https://www.youtube.com/embed/6sxCFZ8_d84" frameborder="0" allowfullscreen></iframe>
            </figure>
          </div>
          <div class="column">
            <div class="title">
              <p>Nomadland</p>
            </div>
            <div class="subtitle">
              <p>7,4 | Drama | Frances McDormand, Gay DeForest, Patricia Grier</p>
            </div>
            <div class="subtitle deskripsi">
              <p>
              Menyusul keruntuhan ekonomi sebuah kota di pedesaan Nevada, 
              Fern (Frances McDormand) mengemasi vannya dan menjelajahi kehidupan yang tidak biasa di lanskap luas Amerika Barat. 
              Sepanjang jalan, ia membentuk ikatan yang tak terpatahkan dengan pengembara lain dalam kisah harapan dan ketahanan yang mengharukan ini.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>


    <!-- Footer -->
    <footer class="footer" style="background-color: #17202A;" id="footer">
      <div class="container pb-6 mb-6">
        <div class="columns pb-4">
          <div class="column">
            <div class="title">
              <h1 class="plotwist">plotwist</h1>
            </div>
            <div class="subtitle is-6" style="color: hsl(0, 0%, 86%); font-weight: 600;">
              <p>Home of quality movies</p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="column">
            <p class="title is-6">Movies</p>
            <p class="subtitle is-6">
              <a href="#latest">Latest</a><br>
              <a href="#popular">Popular</a><br>
              <a href="#upcoming">Upcoming</a>
            </p>
          </div>
          <div class="column">
            <p class="title is-6">Contact Us</p>
            <p class="subtitle is-6">
              <a href="#">Email</a><br>
              <a href="#">Phone</a><br>
              <a href="#">Social media</a>
            </p>
          </div>
          <div class="column">
            <p class="title is-6">Admin</p>
            <p class="subtitle is-6">
              <a href="php/login.php">Login</a><br>
              <a href="php/registrasi.php">Registrasi</a>
            </p>
          </div>

        </div>
      </div>
      <div class="garis"></div>
      <div class="copyright">
        <figcaption class="has-text-centered pt-3">
          <small style="color: hsl(0, 0%, 86%);">
          Copyright &copy; 2021 <a href="#home" style="color: hsl(171, 100%, 41%) !important;">plotwist</a> by Hifki Yuda Pratama | 203040071
          </small>
        </figcaption>
      </div>
    </footer>



    <script src="js/main.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="js/splide.min.js"></script>
    <script>
      $(window).on("scroll", function(){
        if($(window).scrollTop() > 50){
          $(".navbar").addClass("active");
          $(".nav").addClass("active");
        } else {
          $(".navbar").removeClass("active");
          $(".nav").removeClass("active");
        }
      });

      new Splide( '#splide', {
        type   : 'loop',
        perPage: 3,
        perMove: 3,
        gap    : '0.5rem',
        autoplay: true,
        breakpoints: {
          '640': {
            perPage: 1,
            perMove: 2,
            gap    : '1rem',
          },
          '480': {
            perPage: 1,
            perMove: 1,
            gap    : '1rem',
          },
          '768': {
            perPage: 2,
            perMove: 1,
            gap    : '1rem',
          },
        }
      } ).mount();
    </script>
  </body>
</html>
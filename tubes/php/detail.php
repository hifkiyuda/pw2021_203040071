<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$movies = query("SELECT * FROM movies WHERE id = $id")[0];

$slider = query("SELECT * FROM movies");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plotwist | Detail</title>
    <!-- My Logo -->
    <link rel="icon" href="../assets/img/plotwist.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Splide -->
    <link rel="stylesheet" href="../css/splide.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <div class="navbar-item">
        <a href="../index.php">
          <span class="icon has-text-primary">
            <i class="fas fa-arrow-left"></i>
          </span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Detail -->
  <div class="detail">
    <div class="item is-mobile">
      <div class="caption">
        <p class="title">
            <?= $movies["judul"]; ?>
        </p>
        <p class="subtitle">
          Pemeran : <?= $movies["cast"]; ?><br>
          Rating : <?= $movies["rating"]; ?><br>
          Genre : <?= $movies["genre"]; ?><br>
          Harga : <?= $movies["harga"]; ?>
        </p>
        <div class="buttons">
          <button class="button is-success" title="Disabled button" disabled>Tonton</button>
          <a href="" class="button is-link">
          Beli <?= $movies["harga"]; ?>
          </a>
        </div>
      </div>
      <figure class="image">
          <img src="../assets/home/<?= $movies['poster']; ?>" alt="">
      </figure>
    </div>
  </div>

  <section class="section">
    <div class="title">
      <h1>Lihat film lainnya</h1>
    </div>
    <div class="splide pb-5" id="splide">
      <div class="splide__track">
        <ul class="splide__list">
        <?php foreach ($slider as $s) : ?>
          <li class="splide__slide poster">
            <a class="image" href="detail.php?id=<?= $s['id']; ?>">
              <img src="../assets/img/<?= $s['poster']; ?>" alt="">
            </a>
            <a class="caption caption-detail" href="detail.php?id=<?= $s['id']; ?>">
              <?= $s["judul"]; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>


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
            <a href="../#latest">Latest</a><br>
            <a href="../#popular">Popular</a><br>
            <a href="../#upcoming">Upcoming</a>
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
            <a href="login.php">Login</a><br>
            <a href="registrasi.php">Register</a>
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

  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
  <script src="../js/splide.min.js"></script>
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
      perPage: 6,
      perMove: 1,
      gap    : '0.5rem',
      breakpoints: {
        '640': {
          perPage: 3,
          gap    : '1rem',
        },
        '480': {
          perPage: 3,
          gap    : '1rem',
        },
      }
    } ).mount();
  </script>
</body>
</html>
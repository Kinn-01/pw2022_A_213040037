<?php 

require 'function.php';
$jerseay = query("SELECT * FROM jerseay");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My css -->
    <link rel="stylesheet" href="../css/style.css" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <link rel="icon" href="../img/kits/2.jpg">

    <title>Chelsea Store</title>
  </head>
  <body>
    
<!-- Navbar -->
<div id="home">
<nav class="navbar bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../img/2.jpg" alt="" width="50" height="44" class="rounded-circle" class="d-inline-block align-text-top">
      <span>Chelsea District</span>
    </a>
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#merchandise">Kits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Admin</a>
  </li>
</ul>
  </div>
</nav>
</div>
<!-- Akhir Navbar -->

<!-- Carousel -->
<section class="jumbotron-fluid">
<div class="top-wrapper">
    <div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide col-lg-12" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/bg/j.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Shop Now  <a href="#"><i class="bi bi-shop text-danger"></i></a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/bg/p-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Shop Now  <a href="#"><i class="bi bi-shop text-danger"></i></a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/bg/w-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Shop Now  <a href="#"><i class="bi bi-shop text-danger"></i></a></h5>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
    </div>

</div>
</section>
<!-- Akhir Carousel -->

<!-- <?php foreach ($jerseay as $jrs) { ?>
  <?php } ?> -->
  <!-- <?php echo $jrs["price"]; ?> -->

<!-- Section Merchandise -->
<section id="merchandise" style="padding-top: 8rem;">
<h1 style="text-align: center;">Kits</h1>
  <div class="container">
  <!-- <div data-aos="flip-left"></div> -->
    <div class="row">
     <?php foreach ($jerseay as $jrs) : ?>
      <div class="col-sm-4">
      
        <div class="card">
          <img src="../img/<?php echo $jrs["gambar"]; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $jrs["price"]; ?></h5>
            <p class="card-text"><?php echo $jrs["tshirt"]; ?></p>
            <p class="card-text"><?php echo $jrs["size"]; ?></p>
            <p class="card-text">Stok : <?php echo $jrs["stok"]; ?></p>
            <!-- <a href="detail.php" class="btn btn-primary">Detail</a> -->
          </div>
        </div>
      
      </div>

      <?php endforeach; ?>
    </div>

  </div>

</section>

<!-- Akhir section -->

 <hr>
 
<!-- Sponsor -->

<!-- Akhir Sponsor -->

<!-- footer -->

<footer class="bt-footer bg-dark position-relative text-white p-4 p-lg-5 "  >
      <div class="row">
        <div class="col">
          <img src="../img/2.jpg" class="img-fluid mb-4 rounded-circle" width="100">
          
          
          <p class="text-white">
          Copyright © Chelsea Official Store 2022
          </p>
          <div class="d-inline-block mx-3">
            <a href="https://www.instagram.com/chelseafc/?hl=id">
              <div class="rounded-circle bg-dark" style="width: 32px;height: 32px;">
                <svg class="svg-inline--fa fa-instagram fa-w-14 fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                <!-- <i class="fab fa-instagram fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%"></i> Font Awesome fontawesome.com -->
              </div>
            </a>
          </div>

        </div>

        <div class="col">
          <div class="row">
            <div class="col">
              <h6 >
                <h4 class="mb-2">Kebijakan Privasi</h4>
              </h6>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0" style="padding-top: 6rem;">Syarat & Ketentuan</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Film</a> -->
              </div>
            </div>
            <div class="col">
              <h6>
              <h4 class="mb-2">Hubungi Kami</h4>
              </h6>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0" style="padding-top: 6rem;">085797983833</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </footer>
    
<!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

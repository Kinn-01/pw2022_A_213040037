<?php 
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
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <link rel="icon" href="img/2.jpg">

    <title>Chelsea Store</title>
  </head>
  <body>
    
<!-- Navbar -->
<nav class="navbar bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/2.jpg" alt="" width="50" height="44" class="rounded-circle" class="d-inline-block align-text-top">
      <span>Chelsea District</span>
    </a>
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#merchandise">Men</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#merchandise">Women</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#merchandise">Training Kits</a>
  </li>
  <li class="nav-item">
  <a class="nav-item btn btn-primary tombol" href="#">Login</a>
  </li>
</ul>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-info" type="submit">Search</button>
</form>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Carousel -->
<section class="jumbotron">
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
      <img src="img/bg/j.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Shop Now  <a href="#"><i class="bi bi-shop text-danger"></i></a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg/p-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Shop Now  <a href="#"><i class="bi bi-shop text-danger"></i></a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg/w-2.jpg" class="d-block w-100" alt="...">
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
<!-- Akhir Carousel -->

<!-- Section Merchandise -->
<section id="merchandise">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h5></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £84,99 </h5>
    <p class="card-text">Chelsea Home Shirt 2020-2021</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-2.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £102,99 </h5>
    <p class="card-text">Chelsea Home Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £96,99 </h5>
    <p class="card-text">Chelsea Away Shirt 2020-2021</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-7.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £86,99 </h5>
    <p class="card-text">Chelsea Women Home Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="flip-up" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £76,99 </h5>
    <p class="card-text">Chelsea Women Away Shirt 2020-2021</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/Kits-9.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £106,99 </h5>
    <p class="card-text">Chelsea Women Away Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/T-kits-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £69,99 </h5>
    <p class="card-text">Chelsea Training Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3"data-aos="fade-up" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/T-kits-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £72,87 </h5>
    <p class="card-text">Chelsea Training Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="2000">
      <div class="card">
  <img src="img/kits/T-kits-3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Price : £56,99 </h5>
    <p class="card-text">Chelsea Training Shirt 2021-2022</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Section -->
<!-- <hr> -->
<!-- Sponsor -->
<section id="sponsor">
  <div class="container">
  <div class="row text-center">
      <div class="col">
        <h5></h5>
       </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
    <div class="card">
      <hr>
  <img src="img/ft/sponsor.png" class="card-img-top" alt="...">
</div>
    </div>
    </div>
   
  </div>
</section>
<!-- Akhir Sponsor -->

<!-- Footer -->
<footer class="bg-primary">

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

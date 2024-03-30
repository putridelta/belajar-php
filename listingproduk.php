<?php
$product =[[
  'image'=> 'src/image/produk/bakso.svg',
  'nama'=> 'Bakso Spesial Jumbo',
  'harga'=> 18000,
  'deskripsi'=> 'daging sapi yang kenyal, disajikan dalam kuah kaldu yang gurih'
],
[
  'image'=>'src/image/produk/burger.svg',
  'nama'=> 'Super Beef Cheese Burger',
  'harga'=> 25000,
  'deskripsi'=> 'roti bulat dengan isian patty daging sapi yang digrill dan keju'

],
[
  'image'=> 'src/image/produk/fruit.svg',
  'nama'=>'Fruit Strawberry Sandwich',
  'harga'=> 15000,
  'deskripsi'=> 'buah segar dan krim, dijepit antara dua lapis roti tawar tanpa kulit'

],
[
  'image'=> 'src/image/produk/gimbab.svg',
  'nama'=> 'Korean Vegetable Gimbab ',
  'harga'=> 25000,
  'deskripsi'=> 'gulungan nasi yang dibalut dengan rumput laut'
],
[
  'image'=> 'src/image/produk/katsu.svg',
  'nama'=> 'Chickend Katsu',
  'harga'=> 15000,
  'deskripsi'=> 'potongan dada ayam yang dibalut tepung roti dan digoreng'

],
[
  'image'=> 'src/image/produk/lumpia.svg',
  'nama'=> 'Lumpia Sanghai Spring Rolls',
  'harga'=> 18000,
  'deskripsi'=> 'Lumpia ini kemudian digoreng hingga kulitnya berwarna keemasan dan renyah'

],
[
  'image'=> 'src/image/produk/nasgor.svg',
  'nama'=> 'Nasi Goreng',
  'harga'=> 12000,
  'deskripsi'=> 'Nasi Goreng ala indonesia dengan tambahan telur'

],
[
  'image'=> 'src/image/produk/sosis.svg',
  'nama'=>  'Sosis Bakar Jumbo',
  'harga'=> 25000,
  'deskripsi'=> 'Sosis Jumbo yang di bakar dengan balutan saos'

],
[
  'image'=> 'src/image/produk/soup.svg',
  'nama'=>'Seafood Tom Yum Soup',
  'harga'=> 20000,
  'deskripsi'=> 'Soup seafood yang memilki rasa perpaduan asam manis'

],
[
  'image'=> 'src/image/produk/tteokbokki.svg',
  'nama'=> 'Tteokbokki Korean',
  'harga'=> 20000,
  'deskripsi'=> 'kue beras kenyal yang dimasak dalam saus gochujang pedas manis'

],
[
  'image'=> 'src/image/produk/wonton.svg',
  'nama'=> 'Special Chili Oil Wonton',
  'harga'=> 18000,
  'deskripsi'=> 'pangsit yang berisi campuran daging cincang dan bumbu'

]];

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>product</title>

    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">

    

 


    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<nav class="navbar navbar-expand-md bg-light bg-white sticky-top border-bottom" >
  <div class="container">
    <a class="navbar-brand d-md-none" href="#">
      <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
      Granny’s
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">contact</a></li>
        
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
          <a href="" class="btn btn-danger text-white py-2 px-3">Logout</a>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="position-relative overflow-hidden text-center bg-product" style="height:480px; ">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold text-white pt-5">Food Deliverry</h1>
      <h3 class="fw-normal  mb-3 text-white">Granny’s Kitchen</h3>
    </div>
  </div>
    </main>
    <hr class="border border-danger border-2 opacity-50">
<p class="text-center m-5">"Tidak ada yang lebih memuaskan daripada menyajikan hidangan lezat yang menghangatkan hati dan menghubungkan orang-orang. Di Granny Kitchen, kami percaya bahwa setiap suapan adalah kisah yang bermakna. Mari kita jadikan setiap hidangan sebagai perjalanan rasa yang tak terlupakan, menghantarkan kelezatan dari dapur nenek yang penuh cinta langsung ke pintu Anda. Selamat menikmati setiap gigitan, dan mari berbagi kebahagiaan melalui makanan."</p>
<hr class="border border-danger border-2 opacity-50">
<h2 class="text-center fw-bold m-5">Menu Product</h2>
<section class=" top-0 d-flex flex-wrap m-5 justify-content-center border-0" >


<?php foreach($product as $p):?>
<div class="position-relativ card mb-3 bg-list m-3 rounded-4 border-0 w-card" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="<?php echo $p['image']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title"><?php echo $p['nama']; ?></h5>
        <p class="card-text"><?php echo $p['harga']; ?></p>
        <p class="card-text des-hidden"><small class="text-body-secondary"><?php echo $p['deskripsi']; ?></small></p>
        <button class="position-absolute btn btn-warning " style="left:10px; top:120px;">Buy Now</button>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>



    
</section>

<footer class="container pt-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-body-secondary">&copy; 2017–2024</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>

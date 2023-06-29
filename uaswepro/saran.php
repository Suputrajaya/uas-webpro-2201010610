<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--FontAwesome icons-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<title>uas wepro</title>
</head>

<style>
    body {
      font-family: 'poppins', sans-serif;
    }
    /* navbar */
    .navbar-brand{
      font-weight: 700;
    }
    .nav-link.active{
      font-weight: 700;
    }
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-group input[type="number"] {
      width: 100%;
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .form-group select {
      width: 100%;
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .form-group button {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .result {
      margin-top: 15px;
      font-weight: bold;
    }

    .container h2{
        text-align: center;
    }
    .main{
      background: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
      padding: 30px;
      display: flex;
    }

    
  </style>
  
    <body>
      <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow bg-body-tertiary rounded" >
          <div class="container">
            <a class="navbar-brand" href="#">CHange</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav nav-tabs ms-auto">
                <li class="nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="beranda.html">BERANDA</a>
                </li>
                <li class="nav-item mx-2 dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fitur Konversi
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Panjang</a></li>
                    <li><a class="dropdown-item" href="fiturBerat.html">Berat</a></li>
                    <li><a class="dropdown-item" href="#">Suhu</a></li>
                  </ul>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#">Saran dan Masukan</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!-- navbar akhir -->

    <!-- form saran -->
    <div class="main">
    <div class="col-7">
      <div class="tampilSaran">
        <img src="gambar/suhu.png" alt="">
      </div>
    </div>

    <div class="col-5">
    <h3>Tambah Saran</h3>
  <form method="POST" action="">
  <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="txEMAIL" placeholder="Nama Lengkap">
        <label for="floatingInput">email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="saran" class="form-control" id="txSARAN" placeholder="Alamat Email" rows="3">
        <label for="floatingInput">Masukan saran</label>
    </div>
    <button onclick="kirimsaran()" type="submit" id="tampil" value="simpan" name="proses" class="btn btn-primary"> Kirim </button>
    </div>
    </div>

    <script>
      function kirimsaran(){
        let email = document.getElementById("txEMAIL").value;
        let saran = document.getElementById("txSARAN").value;
        alert("saran berhasil dikirim")
        };
    </script>

<script src="code.jquery.com_jquery-3.7.0.min.js"></script>




  <!-- Site footer -->
  <footer
  class="text-center text-lg-start text-white"
  style="background: linear-gradient(135deg,rgb(192, 189, 189) 0%,rgb(169,184,195) 100%);"
  >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
<!--Grid row-->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">
      Company name
    </h6>
    <p>
      Here you can use rows and columns to organize your footer
      content. Lorem ipsum dolor sit amet, consectetur adipisicing
      elit.
    </p>
  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
    <p>
      <a class="text-white">MDBootstrap</a>
    </p>
    <p>
      <a class="text-white">MDWordPress</a>
    </p>
    <p>
      <a class="text-white">BrandFlow</a>
    </p>
    <p>
      <a class="text-white">Bootstrap Angular</a>
    </p>
  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
    <p><i class="fas fa-home mr-3"></i> Bali</p>
    <p><i class="fas fa-envelope mr-3"></i> Suputrajaya280@gmail.com</p>
    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

    <!-- Facebook -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #3b5998"
       href="https://www.facebook.com/kadek.suputra.73?mibextid=ZbWKwL"
       role="button"
       ><i class="fab fa-facebook-f"></i
      ></a>

    <!-- Twitter -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #55acee"
       href="#!"
       role="button"
       ><i class="fab fa-twitter"></i
      ></a>

    <!-- Google -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #dd4b39"
       href="#!"
       role="button"
       ><i class="fab fa-google"></i
      ></a>

    <!-- Instagram -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #ac2bac"
       href="https://www.instagram.com/putra.lanyink/"
       role="button"
       ><i class="fab fa-instagram"></i
      ></a>

    <!-- Linkedin -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #0082ca"
       href="#!"
       role="button"
       ><i class="fab fa-linkedin-in"></i
      ></a>
    <!-- Github -->
    <a
       class="btn btn-primary btn-floating m-1"
       style="background-color: #333333"
       href="#!"
       role="button"
       ><i class="fab fa-github"></i
      ></a>
  </div>
</div>
<!--Grid row-->
</section>
<!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div
 class="text-center p-3"
 style="background-color: rgba(0, 0, 0, 0.2)"
 >
© 2020 Copyright:
<a class="text-white" href="https://mdbootstrap.com/"
 >MDBootstrap.com</a
>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
</div>
<!-- End of .container -->

<!--Compiled and minified Jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>
<script src="scriptSuhu.js"></script>
</html>
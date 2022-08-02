
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Aqila Garden</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Aqila <em>Garden</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Produk</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="artikel.php">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lelang.php">Lelang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>SEMUA PRODUK</h4>
              <h2>PRODUK AQILA GARDEN</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="section-heading">
                <h2>Tentang Aqila Garden</h2>
              </div>
            </div>
        </div>
      </div>

      <?php
                include('komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM artikel');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $artikel){                                
              ?>
      <div class="container">
        <div class="row">
          

          

          <div class="col-md-6">
            <div class="left-content">
              <h4><?= $artikel['judul_artikel'] ?></h4>
              <p><?= $artikel['desk_artikel'] ?></p>
              <a href="about.php" class="filled-button">Selengkapnya</a>
            </div>
          </div>

          

          <div class="col-md-6">
            <div class="right-image">
              <img src="admin/upload/<?= $artikel['gambar_artikel']; ?>">
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
      
    </div>

  

    
<?php 

include ('komponen/footer.php');

 ?>
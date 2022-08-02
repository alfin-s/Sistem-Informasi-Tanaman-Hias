
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

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>

            

                  <li class="active" data-filter="*">Semua Produk</li>
                  <li data-filter=".des">Tanaman Hias</li>
                  <li data-filter=".dev">Tanaman Obat</li>
                  <li data-filter=".gra">Tanaman Racun</li>




              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                                  
                    
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
                    
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="detail-artikel.php?id=<?= $artikel['id_artikel']?>">

                         <img src="admin/upload/<?= $artikel['gambar_artikel']; ?>">

                        <div class="down-content">
                          <a href="detail-artikel.php?id=<?= $artikel['id_artikel']?>"><h4><?= $artikel['judul_artikel'] ?> </h4></a>
                            <p>
                            <?=$artikel['desk_artikel'] ?> 
                            </p>
                          <ul class="stars">
                              <button class="btn btn-primary" >Selengkapnya</button>
                          </ul>
                          
                          

                        
                          
                        </div>
                      </div>
                    </div>

                  <?php    } ?>

                </div>
            </div>
          </div><!-- 
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>

    
<?php 

include ('komponen/footer.php');

 ?>
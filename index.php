<?php

include ('komponen/header.php');
include ('komponen/navbar.php');
include ('komponen/banner.php');

?>


    <!-- Page Content -->

    <div class="latest-products">
      <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Produk</h2>
              <a href="products.php">Lihat Semua Produk <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <?php
                include('komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM produk');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $produk){                                
                ?>
                    
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="detail-produk.php?id=<?= $produk['id_produk']?>">

                         <img src="admin/upload/<?= $produk['gambar']; ?>">

                        <div class="down-content">
                          <a href="detail-produk.php?id=<?= $produk['id_produk']?>"><h4><?= $produk['judul'] ?> </h4></a>
                          <h6><?= $produk['harga'] ?></h6>
                            
                          <ul class="stars">
                            <li style="color: red;">Stok : <?= $produk['stok'] ?></li>


                              <div class="text-right">

                            
                              <a href="detail-produk.php?id=<?= $produk['id_produk']?>" class="btn btn-danger" >Detail Produk</a>
                           
                              </div>
                          </ul>
                          
                          

                        
                          
                        </div>
                      </div>
                    </div>

                  <?php    } ?>
          
          
        </div>
      </div>
    </div>
    </div>


              <?php
                include('komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM profil');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $profil){                                
              ?>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Tentang Aqila Garden</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4><?= $profil['judul_profil'] ?></h4>
              <p><?= $profil['desk_profil'] ?></p>
              <a href="about.php" class="filled-button">Selengkapnya</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>



<?php 

include ('komponen/footer.php');

 ?>
<?php

include ('komponen/header.php');
include ('komponen/detail-produk.php');
include('komponen/koneksi.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk join kategori ON kategori.id_kategori = produk.id_kategori WHERE id_produk = '$id' ");                                
                
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data; //result dijadikan array 
}                
                //selanjutnya result array di foreach
foreach ($result as $produk){
?>
    <br><br><br><br><br><br><br><br><br>
               
    <div class="body-wrapper"></div>
   
    <!-- Main item container -->
    <main class="item">
      <section class="img">
       
        <img src="admin/upload/<?= $produk['gambar']; ?>" class="img-main">
        
        </div>
      </section>
      <section class="price">
        <h2 class="price-sub__heading"><?= $produk['nama_kategori']?></h2>
        <h1 class="price-main__heading"><?= $produk['judul']?></h1>
        <p class="price-txt">
          <?= $produk['desk']?>
        </p>
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-discount">Rp</span>
            <span class="price-box__main-new"><?= $produk['harga'] ?>
            </span>
          </div>
        </div>

        <div class="price-btnbox">

          <?php
            include('komponen/koneksi.php');
            $no = 1;
            $query = mysqli_query($koneksi, 'SELECT * FROM kontak');                                
                                
            $result = array(); 
            while ($data = mysqli_fetch_array($query)) {
            $result[] = $data; //result dijadikan array 
            }                
            //selanjutnya result array di foreach
            foreach ($result as $kontak){                                
          ?>
          <form action="<?= $kontak['whatsapp'] ?>">
          <button class="price-cart__btn btn--orange">
            Beli Sekarang
          </button>
          </form>

        <?php } ?>


        </div>
      </section>
    </main>

<?php 
}
include ('komponen/footer.php');

 ?>

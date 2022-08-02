<?php

include ('komponen/header-artikel.php');
include ('komponen/detail-artikel.php');
include('komponen/koneksi.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id' ");                                
                
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data; //result dijadikan array 
}                
                //selanjutnya result array di foreach
foreach ($result as $artikel){
?>
    <br><br><br><br><br><br><br><br><br>
               
    <div class="body-wrapper"></div>
   
    <!-- Main item container -->
    <main class="item">
      <section class="img">
       
        <img src="admin/upload/<?= $artikel['gambar_artikel']; ?>" class="img-main">
        
        </div>
      </section>
      <section class="price">
        <h1 class="price-main__heading"><?= $artikel['judul_artikel']?></h1>
        <p class="price-txt">
          <?= $artikel['desk_artikel']?>
        </p>

        <div class="price-btnbox">

          
          <form action="<?= $artikel['link_youtube'] ?>">
          <button class="price-cart__btn btn--orange">
            YOUTUBE
          </button>
          </form>


        </div>
      </section>
    </main>

<?php 
}
include ('komponen/footer.php');

 ?>

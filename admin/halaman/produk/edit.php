<?php 
  
  include('../../../komponen/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM produk WHERE id_produk = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>



<?php 

include('../../komponen/header.php');
include('../../komponen/navbar.php');
include('../../komponen/sidebar.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id' ");                                
                
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data; //result dijadikan array 
}                
                //selanjutnya result array di foreach
foreach ($result as $produk){

 ?>


<div class="content-wrapper" style="min-height: 553px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda/Edit Produk</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                  <!-- Form Element sizes -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Produk</h3>
                    </div>
                    <div class="card-body">
                      <form action="edit-produk.php?id=<?= $produk['id_produk']?>" method="POST" enctype="multipart/form-data">
                        <label class="lable">Nama Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Nama Tanaman" name="judul" value="<?= $produk['judul'] ?>">
                        <br>
                        <label class="lable">Harga Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Harga" name="harga" value="<?= $produk['harga'] ?>">
                        <br>
                        <label class="lable">Stok Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Stok Tanaman" name="stok" value="<?= $produk['stok'] ?>">
                        <br>
                        <label class="lable">Gambar Tanaman</label>
                        <input class="form-control form-control-sm" type="file" placeholder="Masukan Stok Tanaman" name="gambar" value="<?= $produk['gambar'] ?>">
                        <br>
                        <label class="lable">Kategori Tanaman</label>
                        <select class="form-control" name="id_kategori">

                          <?php
                            include('../../../komponen/koneksi.php');
                            $no = 1;
                            $query = mysqli_query($koneksi, 'SELECT * FROM kategori');                                
                            
                            $result = array(); 
                            while ($data = mysqli_fetch_array($query)) {
                            $result[] = $data; //result dijadikan array 
                            }                
                            //selanjutnya result array di foreach
                            foreach ($result as $kategori){                                
                          ?>

                          <option value="<?= $kategori['id_kategori']?>">
                            <?= $kategori['nama_kategori'] ?> 
                          </option>

                        <?php } ?>
                        </select>

                        <br>
                        <label class="lable">Deskripsi Tanaman</label>
                        <textarea class="form-control" id="summernote" placeholder="Masukan Deskripsi Tanaman" name="desk"><?= $produk['desk'] ?>
                          
                        </textarea>
                        <br>
                        <input type="hidden" name="gambar-lama" value="<?= $produk['gambar'] ?>">
                        <button type="submit" class="btn btn-primary" action="">
                          Edit Produk
                        </button>&nbsp; &nbsp;&nbsp;
                        <form action="index.php">
                          <button type="submit" class="btn btn-danger" action="">
                          Batal
                        </button>
                        </form>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>

</div>

<?php 
}

?>


<?php include('../../komponen/footer.php') ?>
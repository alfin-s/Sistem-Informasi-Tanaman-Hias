<?php 
  
  include('../../../komponen/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM artikel WHERE id_artikel = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>



<?php 

include('../../komponen/header.php');
include('../../komponen/navbar.php');
include('../../komponen/sidebar.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id' ");                                
                
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data; //result dijadikan array 
}                
                //selanjutnya result array di foreach
foreach ($result as $artikel){

 ?>

<div class="content-wrapper" style="min-height: 553px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Edit Artikel</li>
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
                      <h3 class="card-title">Form Edit Artikel</h3>
                    </div>
                    <div class="card-body">
                      <form action="update-artikel.php?id=<?= $artikel['id_artikel']?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id">
                        <label class="lable">Judul Artikel</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan judul artikel" name="judul_artikel" value="<?= $artikel['judul_artikel'] ?>">
                        <br>
                        <label class="lable">Link Youtube</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Youtube" name="link_youtube" value="<?= $artikel['link_youtube'] ?>">
                        <br>
                        <label class="lable">Gambar Artikel</label>
                        <input class="form-control form-control-sm" type="file" placeholder="Masukan Gambar Artikel" name="gambar_artikel" value="$artikel['gambar_artikel'] ?>">
                        <br>
                        <label class="lable">Isi Artikel</label>
                        <textarea class="form-control" id="summernote" placeholder="Masukan isi artikel" name="desk_artikel"><?= $artikel['desk_artikel'] ?></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          Edit Artikel
                        </button>
                        <a href="data-artikel.php" class="btn btn-danger">Batal</a>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>

</div>
<?php } ?>


<?php include('../../komponen/footer.php') ?>
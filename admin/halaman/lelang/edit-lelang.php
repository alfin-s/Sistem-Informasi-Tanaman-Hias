<?php 
  
  include('../../../komponen/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM lelang WHERE id_lelang = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>



<?php 

include('../../komponen/header.php');
include('../../komponen/navbar.php');
include('../../komponen/sidebar.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM lelang WHERE id_lelang = '$id' ");                                
                
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data; //result dijadikan array 
}                
                //selanjutnya result array di foreach
foreach ($result as $lelang){

 ?>

<div class="content-wrapper" style="min-height: 553px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Lelang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Edit Lelang</li>
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
                      <h3 class="card-title">Form Edit Lelang</h3>
                    </div>
                    <div class="card-body">
                      <form action="update-lelang.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-sm-3">
                            <input type="hidden" name="id" value="<?= $lelang['id_lelang'] ?>">
                            <label class="lable">Judul Lelang</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Masukan judul lelang" name="judul_lelang" value="<?= $lelang['judul_lelang'] ?>">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Jam Lelang</label>
                            <input class="form-control form-control-sm" type="time" placeholder="Masukan Jam Lelang" name="jam_lelang" value="<?= $lelang['jam_lelang'] ?>">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Tanggal Lelang</label>
                            <input class="form-control form-control-sm" type="date"  name="tanggal_lelang" value="<?= $lelang['tanggal_lelang'] ?>">
                          </div>
                          <div class="col-sm-3">
                            <label class="lable">Link Grup Lelang</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Youtube" name="grupwa" value="<?= $lelang['grupwa'] ?>">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Gambar Artikel</label>
                            <input class="form-control form-control-sm" type="file" placeholder="Masukan Gambar Lelang" name="gambar_lelang" value="gambar_lelang">
                          </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          EDIT
                        </button>&nbsp;&nbsp;
                        <a href="index.php" class="btn btn-danger">BATAL</a>
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
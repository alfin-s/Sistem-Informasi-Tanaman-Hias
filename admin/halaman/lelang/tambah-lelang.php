<?php 

include('../../komponen/header.php');
include('../../komponen/navbar.php');
include('../../komponen/sidebar.php');

 ?>

<div class="content-wrapper" style="min-height: 553px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Lelang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Tambah Lelang</li>
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
                      <h3 class="card-title">Form Tambah Lelang</h3>
                    </div>
                    <div class="card-body">
                      <form action="simpan-lelang.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-sm-3">
                            <label class="lable">Judul Lelang</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Masukan judul artikel" name="judul_lelang">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Jam Lelang</label>
                            <input class="form-control form-control-sm" type="time" placeholder="Masukan Jam Lelang" name="jam_lelang">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Tanggal Lelang</label>
                            <input class="form-control form-control-sm" type="date" placeholder="Masukan Link Youtube" name="tanggal_lelang">
                          </div>
                          <div class="col-sm-3">
                            <label class="lable">Link Grup Lelang</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Youtube" name="grupwa">
                          </div>
                          <div class="col-sm-2">
                            <label class="lable">Gambar Artikel</label>
                            <input class="form-control form-control-sm" type="file" placeholder="Masukan Gambar Lelang" name="gambar_lelang">
                          </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          SIMPAN
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


<?php include('../../komponen/footer.php') ?>
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
            <h1 class="m-0">Tambah Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Tambah Artikel</li>
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
                      <h3 class="card-title">Form Tambah Artikel</h3>
                    </div>
                    <div class="card-body">
                      <form action="simpan-artikel.php" method="POST" enctype="multipart/form-data">
                        <label class="lable">Judul Artikel</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan judul artikel" name="judul_artikel">
                        <br>
                        <label class="lable">Link Youtube</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Youtube" name="link_youtube">
                        <br>
                        <label class="lable">Gambar Artikel</label>
                        <input class="form-control form-control-sm" type="file" placeholder="Masukan Gambar Artikel" name="gambar_artikel">
                        <br>
                        <label class="lable">Isi Artikel</label>
                        <textarea class="form-control" id="summernote" placeholder="Masukan isi artikel" name="desk_artikel"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          SIMPAN
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


<?php include('../../komponen/footer.php') ?>
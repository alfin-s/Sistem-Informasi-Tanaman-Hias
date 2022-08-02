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
            <h1 class="m-0">Data Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Profil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

                <?php
                  include('../../../komponen/koneksi.php');
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM profil WHERE id_profil = 1');                                
                  
                  $result = array(); 
                  while ($data = mysqli_fetch_array($query)) {
                  $result[] = $data; //result dijadikan array 
                  }                
                  //selanjutnya result array di foreach
                  foreach ($result as $profil){                                
                ?>

      <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                  <!-- Form Element sizes -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Data Profil</h3>
                    </div>
                    <div class="card-body">
                      <form action="update-profil.php" method="POST">
                        <label class="lable">Judul Profil</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Judul Profil" name="judul_profil" value="<?= $profil['judul_profil'] ?>">
                        <br>
                        <label class="lable">Link Instagram</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Instagram " name="instagram" value="<?= $profil['instagram'] ?>">
                        <br>
                        <label class="lable">Link Facebook</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Link Facebook" name="facebook" value="<?= $profil['facebook'] ?>">
                        <br>
                        <label class="lable">Link WhatsApp</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Link WhatsApp" name="whatsapp" value="<?= $profil['whatsapp'] ?>">
                        <br>
                        <label class="lable">Deskripsi Profil</label>
                        <textarea class="form-control" id="summernote" placeholder="Masukan Deskripsi Tanaman" name="desk_profil"><?= $profil['desk_profil'] ?></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          SIMPAN
                        </button>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>

        <?php } ?>

</div>


<?php include('../../komponen/footer.php') ?>
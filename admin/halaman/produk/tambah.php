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
            <h1 class="m-0">Tambah Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Tambah Produk</li>
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
                      <h3 class="card-title">Form Tambah Produk</h3>
                    </div>
                    <div class="card-body">
                      <form action="simpan-produk.php" method="POST" enctype="multipart/form-data">
                        <label class="lable">Nama Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Nama Tanaman" name="judul">
                        <br>
                        <label class="lable">Harga Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Harga" name="harga">
                        <br>
                        <label class="lable">Stok Tanaman</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Masukan Stok Tanaman" name="stok">
                        <br>
                        <label class="lable">Gambar Tanaman</label>
                        <input class="form-control form-control-sm" type="file" placeholder="Masukan Stok Tanaman" name="gambar">
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
                        <textarea class="form-control" id="summernote" placeholder="Masukan Deskripsi Tanaman" name="desk"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" action="">
                          SIMPAN
                        </button>
                        <a href="index.php" class="btn btn-danger">Batal</a>
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
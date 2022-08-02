<?php

include ('../../komponen/header.php');
include ('../../komponen/navbar.php');
include ('../../komponen/sidebar.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Dashboard</li>
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   



<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

           <?php
                include('../../../komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM produk');                                
                $jumlah_produk = mysqli_num_rows($query);
                                             
                ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlah_produk; ?></h3>

                <p>Data Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../produk/index.php" class="small-box-footer">Lihat Data Produk <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <?php
                include('../../../komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM artikel');                                
                $jumlah_artikel = mysqli_num_rows($query);
                                             
                ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $jumlah_artikel; ?></h3>

                <p>Data Artikel</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../artikel/data-artikel.php" class="small-box-footer">Lihat Data Artikel <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php
                include('../../../komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM lelang');                                
                $jumlah_lelang = mysqli_num_rows($query);
                                             
                ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $jumlah_lelang; ?></h3>

                <p>Data Lelang</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../lelang/index.php" class="small-box-footer">Lihat Data lelang <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php
                include('../../../komponen/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM kategori');                                
                $jumlah_kategori = mysqli_num_rows($query);
                                             
                ?>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $jumlah_kategori; ?></h3>

                <p>Data Kategori</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../produk/kategori.php" class="small-box-footer">Lihat Data Kategori <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>





      </div> <!-- Akrir Card -->

    </section>

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


<?php include('../../komponen/footer.php'); ?>
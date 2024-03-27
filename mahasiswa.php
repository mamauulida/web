<?php
include 'template/header.php';
include 'template/sidebar.php' ;

$servername = "localhost";
$database = "poliban";
$username = "root";
$password = "";

$sconn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM mahasiswa JOIN prodi On mahasiswa.id_prodi = prodi.id_prodi";
$hasil = mysqli_query($sconn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil))
{
  $data[] = $baris;
}
?>


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Nama_Prodi</th>
                      <th>Nomor_HP</th>
                      <th>Alamat</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                  foreach ($data as $d) {
                    ?>
                  <tr>
                  <td><?php echo $i++ ?> </td>
                  <td><?php echo $d['NIM']?> </td>
                  <td><?php echo $d['Nama']?> </td>
                  <td><?php echo $d['Nama_Prodi']?> </td>
                  <td><?php echo $d['Nomor_HP']?> </td>
                  <td><?php echo $d['Alamat']?> </td>
                  <td><?php echo $d['Foto']?> </td>
                      <td><a href= "" class="btn btn-warning"> Edit</a>
                      <a href="" class ="btn btn-danger">Hapus</a>
                      </tr>
                    <?php
                    }

                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include 'template/foother.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>praktikum3&4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Randall Park</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 4</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum</li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Pendaftaran IT Club</h5>
              </div>
              <div class="card-body">
                  <?php 
                  // $ar_skill = ["HTML"=>10,"CSS"=>10,"Javascript"=>20,"RWD Bootstrap"=>20,"PHP"=>30,"Python"=>30,"Java"=>50];
                  // $ar_domisili = ["Jakarta","Bogor","Depok","Tangerang","Bekasi","Lainnya"]
                  $ar_prodi = ["SI"=>"Sistem informasi","TI"=>"Teknik Informatika","BD"=>"Bisnis Digital"];
                  $ar_skill = ["HTML"=>10,"CSS"=>10,"Javascript"=>20,"RWD Bootstrap"=>20,"PHP"=>30,"Python"=>30,"Java"=>50];
                  $ar_domisili = ["Jakarta","Bogor","Depok","Tangerang","Bekasi","Lainnya"];
                  ?>
                  <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mt-4">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                                    <div class="col-8">
                                    <select id="prodi" name="prodi" class="custom-select">
                                      <!-- <option value='$k'>Teknik Informatika</option> -->
                                      <?php 
                                      foreach($ar_prodi as $k => $v){
                                        echo "<option value ='$k'>$v</option>";
                                      }
                                      
                                      ?>

                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill</label> 
                                    <div class="col-8">
                                            <!-- <div class='custom-control custom-checkbox custom-control-inline'>
                                              <input name='skill[1]' id='HTML' type='checkbox' class='custom-control-input' value='10'>
                                              <label for='HTML' class='custom-control-label'>HTML</label>
                                            </div> -->
                                      <?php 
                                      foreach($ar_skill as $k => $v){
                                        $jumlah_score =+ $v ;
                                        echo  "<div class='custom-control custom-checkbox custom-control-inline'>";
                                        echo  "<input name='skill[$k]' id='$k' type='checkbox' class='custom-control-input' value='$v'>";
                                        echo  "<label for='$k' class='custom-control-label'>$k</label>";
                                        echo  "</div>";
                                      }




                                
                                      
                                      ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                                    <div class="col-8">
                                        <select id="domisili" name="domisili" class="custom-select">
                                          <?php 
                                          foreach($ar_domisili as $dom){
                                            echo "<option value ='$dom'>$dom</option>";
                                          }
                                      
                                          ?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>


                            <?php
                              function score($jumlah_score){
                                if($jumlah_score <= 40 ){
                                  return 'kurang';
                                } elseif($jumlah_score <= 60){
                                  return 'cukup';
                                } elseif($jumlah_score <= 100){
                                  return 'baik';
                                }
                              }
                            ?>










                            <?php 
                            // if (isset($_POST["submit"])){
                            //   masukan kode yang kaya gini
                            //   $nama = $_POST["nama"];
                            // }


                            if(isset($_POST['submit'])){
                            $nama = $_POST["nama"];
                            $jk = $_POST["jk"];
                            $prodi = $_POST["prodi"];
                            $skill= $_POST["skill"];
                            $domisili= $_POST["domisili"];
                            
                            echo "Skill Pemrograman :";
                            foreach($skill as $k => $k){
                              echo " $k ";
                            }
                            echo "<br/>";
                            echo "Nama Pendaftar :".$nama."<br/>";
                            echo "Jenis Kelamin :".$jk."<br/>";
                            echo "Program Studi :".$prodi."<br/>";
                            // echo "Skill :".$skill."<br/>";
                            echo "Domisili :".$domisili."<br/>";
                            echo "Score : " . score($jumlah_score)."<br>";

                          
                            
                          }
                            ?>
                        </div>
                      </div>
                  </div>

              </div>
          </div>
        </div>
      </div> <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

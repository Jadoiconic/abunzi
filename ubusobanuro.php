<?php
require_once "session.php";
require_once "./actions/conn.php";
$docId = $_GET['q'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abunzi Information Management System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://cdn.tiny.cloud/1/jt1gi5f8nvi2bbr4rp708mz9gfmbj8qlfu8s4vm6mezfickq/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

        <style type = "text/css">
      @media screen {
         .card {font-family:verdana, arial, sans-serif;}
      }

      @media print {
         .card {font-family:georgia, times, serif;}
      }
      @media screen, print {
         .card {font-size:10pt}
      }
</style>
</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h1><i class="fas fa-spinner fa-spin text-primary"></i></h1>
            <h4>Loading</h4>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar  elevation-4">
            <!-- Brand Logo -->
            <?php require_once "./sidebar.php"; ?>
        </aside>

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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->

                    <!-- Main row -->
                    <div class="row">

                        <div class="card">
                            <!-- Info Boxes Style 2 -->
                            

                                <?php
                                $slt = "SELECT * FROM `ibirego` WHERE `id`='$docId'";
                                $n = 1;
                                $qry = mysqli_query($conn, $slt);
                                while ($row = mysqli_fetch_array($qry)) {
                                    ?>
                                    <b class="card-header">
                                    Intara: <?php print($row['intara']) ?> <br>
                                    akarere: <?php print($row['akarere']) ?><br>
                                    umurenge: <?php print($row['umurenge']) ?><br>
                                    Akagari: <?php print($row['akagari']) ?> <br>
                                    Umudugu: <?php print($row['umudugudu']) ?> <br>
                                    Date: <?php print($row['createdAt']) ?> <br><br>
                                </b>
                                   <p> <b><u>Imamvu</u>: </b> <?php print($row['title']) ?> <br><br></p>
                                   <h4>Ubusobanuro kukirego</h4> 
                                   <p>
                                        <?php print($row['ishamake']) ?>
                                    </p>
                                    <hr>
                                    <h4>Umwanzuzo wurubanza</h4>
                                    <p>
                                        <?php print($row['description']) ?>
                                    </p>
                                        
                                    <?php
                                    $n++;
                                }
                                ?>
                                <div class="card-footer  d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
                                </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- Modal -->
                    
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php include "footer.php"; ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>
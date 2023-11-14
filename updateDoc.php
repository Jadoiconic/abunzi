<?php require_once "session.php"; ?>
<?php require_once "./actions/conn.php"; ?>
<?php $docId = $_GET['q']; ?>
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
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://cdn.tiny.cloud/1/jt1gi5f8nvi2bbr4rp708mz9gfmbj8qlfu8s4vm6mezfickq/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
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

                        <?php
                        $sql = "SELECT *FROM ibirego WHERE id='$docId'";
                        $qry = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($qry)) { ?>

                            <form action="./actions/handleUpdateDoc.php" method="post">
                                <div class="modal-body">
                                    <div class="px-2">
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <div>
                                                    <label>Intara</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> name="intara" value="<?php print($data['intara'])?>"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Akarere</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> name="akarere" value="<?php print($data['akarere'])?>"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Umurenge</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> value="<?php print($data['umurenge'])?>" name="umurenge"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Akagari</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> value="<?php print($data['akagari'])?>" name="akagari"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <div>
                                                    <label for="fname">Urega</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> name="pfname"
                                                        value="<?php print($data['ownder'])?>" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="lname">Uregwa</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> name="dfname"
                                                        value="<?php print($data['defender'])?>" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="email">Umutwe w'ikirego</label>
                                                    <input requied type="text" <?php if($isAdmin == 1){}else{print('disabled');} ?> value="<?php print($data['title'])?>"
                                                        name="problem" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <label for="pass">Ubusobanuro</label>
                                            <p>
                                            <?php print($data['ishamake'])?>
                                            </p>
                                        </div>
                                        <div>
                                            <label for="pass">Umanzuro</label>
                                            <textarea requied name="description" class="form-control"><?php print($data['description'])?>
                                                    </textarea>
                                                    <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons  link lists searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link  table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
                                        </div>
                                        <input type="hidden" name="id" value="<?php print($data['id']) ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Bika</button>
                                </div>
                            </form>
                        <?php } ?>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
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

    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>
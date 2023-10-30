<?php
require_once "session.php";
require_once "./actions/conn.php";
$userId = $_SESSION['userInfo']['id'];
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

                        <div class="col-md-12">

                            <!-- Info Boxes Style 2 -->
                            <form action="./actions/handleIbirego.php" method="post">
                                <div class="modal-body">
                                    <div class="px-2">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <h3>Aho baturuka</h3>
                                                <hr>
                                                <div>
                                                    <label>Intara</label>
                                                    <input requied type="text" name="intara" placeholder="Kigali city"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Akarere</label>
                                                    <input requied type="text" name="akarere" placeholder="Gasabo"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Umurenge</label>
                                                    <input requied type="text" placeholder="Kimihuru..." name="umurenge"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Akagari</label>
                                                    <input requied type="text" placeholder="Kayenzi" name="akagari"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label>Umudugudu</label>
                                                    <input requied type="text" placeholder="Muyange" name="umudugudu"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <h3>Amakuru y' urega n'uregwa</h3>
                                                <hr>
                                                <div>
                                                    <label for="fname">Urega</label>
                                                    <input requied type="text" name="pfname"
                                                        placeholder="CYURINYANA Agnes" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="fname">Phone</label>
                                                    <input requied type="text" name="phonega" maxlength="10"
                                                        placeholder="0788800000" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="lname">Uregwa</label>
                                                    <input requied type="text" name="dfname"
                                                    placeholder="KANAMUGIRE Faustin" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="fname">Phone</label>
                                                    <input requied type="text" name="phonegwa" maxlength="10"
                                                        placeholder="0798800000" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="email">Umutwe w'ikirego</label>
                                                    <input requied type="text" placeholder="GUKUBITA no GUKOMERETSA"
                                                        name="problem" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="email">Umutwe w'ikirego</label>
                                                    <select requied name="ubwoko" class="form-control">
                                                        <option disabled selected>Hitamo ubwoko bw'ikirego</option>
                                                        <?php 
                                                        $slt = "SELECT * FROM `ubwoko`";
                                                        $qry = mysqli_query($conn,$slt);
                                                        while ($row = mysqli_fetch_array($qry)) {
                                                            ?>
                                                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                       
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <label for="pass">Ubusobanuro</label>
                                            <textarea requied name="description"
                                                placeholder="CYURINYANA Agnes ararega uwo bashakanye KANAMUGIRE Faustin... "
                                                class="form-control">
                                                </textarea>

                                            <script>
                                                tinymce.init({
                                                    selector: 'textarea',
                                                    plugins: 'ai tinycomments mentions anchor autolink charmap link lists table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography',
                                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table mergetags | align lineheight | checklist numlist bullist indent outdent | removeformat',
                                                    tinycomments_mode: 'embedded',
                                                    tinycomments_author: 'Author name',
                                                    mergetags_list: [
                                                        { value: 'First.Name', title: 'First Name' },
                                                        { value: 'Email', title: 'Email' },
                                                    ],
                                                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
                                                });
                                            </script>
                                        </div>
                                        <input type="hidden" name="userId" value="<?php print($userId); ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>

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
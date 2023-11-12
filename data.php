<?php
require_once "session.php";
require_once "./actions/conn.php";
$userId = $_SESSION['userInfo']['id'];
$isAdmin = $_SESSION['userInfo']['isAdmin'];
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
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

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
                            <div class="d-flex justify-content-between align-items-center">
                                <div></div>
                                <div>
                                <?php if($isAdmin == 1){?>
                                    <a href="ikirego.php" class="btn btn-primary">
                                        Ongera Ikirego
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Info Boxes Style 2 -->
                            <table class="table" id="myTable">
                                <thead class="bg-info">
                                    <tr>
                                        <td>N<sup>o</sup></td>
                                        <td>Urega</td>
                                        <td>Uregwa</td>
                                        <td>Umutwe W'ikirego</td>
                                        <td>Imyanzuro</td>
                                        <td>Byakozwe</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>

                                <?php
                                $sql = "";
                                if ($isAdmin == 1){
                                    $slt = "SELECT * FROM `ibirego` ORDER BY id DESC";
                                }elseif ($isAdmin == 2){
                                    $slt = "SELECT * FROM `ibirego` WHERE  `access_level`='1' ORDER BY id DESC";
                                }elseif ($isAdmin == 3){
                                    $slt = "SELECT * FROM `ibirego2` WHERE  `access_level`='2' ORDER BY id DESC";
                                }
                                $n = 1;
                                $qry = mysqli_query($conn, $slt);
                                while ($row = mysqli_fetch_array($qry)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php print($n) ?>
                                        </td>
                                        <td>
                                            <?php print($row['ownder']) ?>
                                        </td>
                                        <td>
                                            <?php print($row['defender']) ?>
                                        </td>
                                        <td>
                                            <?php print($row['title']) ?>
                                        </td>
                                        <td>
                                            <a class="btn py-0 btn-primary"
                                                href="ubusobanuro.php?q=<?php print($row[0]) ?>">Reba Umwanzuro</a>
                                        </td>
                                        <td>
                                            <?php print($row['createdAt']) ?>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">
                                            <?php if($isAdmin == 1){?> <a class="btn py-0 btn-success"
                                                href="sendDoc.php?q=<?php print($row[0]) ?>">Submit</a><?php }?>
                                            <a class="btn py-0 btn-success"
                                                href="updateDoc.php?q=<?php print($row[0]) ?>"><?php if($isAdmin == 1){print('Hindura');}else{print('Tanga umwanzuro');}?></a>
                                            <a class="btn py-0 btn-danger"
                                                href="deleteDoc.php?q=<?php print($row[0]) ?>">Siba</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $n++;
                                }
                                ?>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ikirego</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="./actions/handleIbirego.php" method="post">
                                    <div class="modal-body">
                                        <div class="px-2">
                                            <div>
                                                <label for="fname">Urega</label>
                                                <input requied type="text" name="pfname" placeholder="CYURINYANA Agnes"
                                                    class="form-control">
                                            </div>
                                            <div>
                                                <label for="lname">Uregwa</label>
                                                <input requied type="text" name="dfname"
                                                    placeholder="KANAMUGIRE Faustin" class="form-control">
                                            </div>
                                            <div>
                                                <label for="email">Umutwe w'ikirego</label>
                                                <input requied type="text" placeholder="GUKUBITA no GUKOMERETSA"
                                                    name="problem" class="form-control">
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
                        </div>
                    </div>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
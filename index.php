<?php require_once "session.php" ?>
<?php
require_once "./actions/conn.php";
$sql = "SELECT * FROM `users`";
$qry = mysqli_query($conn, $sql);
$countUsers = mysqli_num_rows($qry);

$sqli = "SELECT * FROM `ibirego`";
$qryi = mysqli_query($conn, $sqli);
$countIbirego = mysqli_num_rows($qryi);

$sqlcat = "SELECT * FROM `ubwoko`";
$qrycat = mysqli_query($conn, $sqli);
$countCategory = mysqli_num_rows($qryi);

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
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

                        <div class="col-md-12 d-flex justify-content-center">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box mb-3 bg-info mx-1">
                                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Abakoresha</span>
                                    <span class="info-box-number">
                                        <?php print($countUsers) ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-primary  mx-1">
                                <span class="info-box-icon"><i class="far fa-file"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ibirego</span>
                                    <span class="info-box-number">
                                        <?php print($countIbirego) ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <!-- /.info-box -->
                            <div class="info-box mb-3 bg-success  mx-1">
                                <span class="info-box-icon"><i class="far fa-tag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Ubwoko</span>
                                    <span class="info-box-number">
                                        <?php print($countCategory) ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <!-- /.info-box -->


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <canvas id="myBarChart" width="400" height="250"></canvas>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <canvas id="myDoughnutChart" width="400" height="400"></canvas>
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
    <script>
        // Data for the doughnut chart
        fetch('http://localhost/aims/analitics.php')
            .then(response => response.json())
            .then(data => {
                var labels = data.map(item => item.name);
                var values = data.map(item => item.ubwoko);

                var ctx = document.getElementById('myDoughnutChart').getContext('2d');
                var myPieChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: labels,
                        datasets: [{
                            data: values,
                            backgroundColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(123, 202, 255, 1)', 'rgba(103, 100, 200, 1)']
                        },
                        ]
                    },
                    options: {
                        cutoutPercentage: 80,
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
    <script>
        fetch('http://localhost/aims/analitics.php')
            .then(response => response.json())
            .then(data => {
                var labels = data.map(item => item.name);
                var values = data.map(item => item.ubwoko);

                var ctx = document.getElementById('myDoughnutChart').getContext('2d');
                var data = {
                    labels: labels,
                    datasets: [{
                        label: 'Umubare w\'ibirego',
                        data: values,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                };
                var ctx = document.getElementById('myBarChart').getContext('2d');

        // Create the bar chart
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Y-axis starts from 0
                    }
                }
            }
        });
            })
            .catch(error => console.error('Error:', error));


        // Get the canvas element
        
    </script>
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
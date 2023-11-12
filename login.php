<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sigin In Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<section class="h-100 m-0" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  
                  <h4 class="mt-1 mb-5 pb-1">Murakazaneza kuri AIMS</h4>
                </div>

                <form  method="post" action="actions/handleLogin.php">
                  <p>Injira muri Conte yawe</p>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" required id="form2Example11" name="email" class="form-control"
                      placeholder="example@gmail.com" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Ijambobanga</label>
                    <input type="password" required id="form2Example22" name="pass" placeholder="Password" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg bg-info mb-3" type="submit">
                      Injira</button>
                    <a class="text-muted" href="#!"></a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <?php
                if(isset($_SESSION["loginError"])){
                    ?>
                    <div class="alert alert-danger">
                        <?php print($_SESSION["loginError"]) ?>
                    </div>
                    <?php
                    unset($_SESSION["loginError"]);
                }
                ?>
                    
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center bg-info">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Abunzi Information Management System</h4>
                <p class="small mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
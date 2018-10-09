<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Diseño
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class=" ">
  <div class="wrapper ">
    @include('partials.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                  <div class="row">
                    <div class="col-sm-6 text-left">
                      <h5 class="card-category">Inicio</h5>
                      <h2 class="card-title">Bienvenido</h2>
                    </div>
                    <div class="col-sm-6">
                      <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-sm btn-success btn-simple active" id="0">
                          <input type="radio" name="options" autocomplete="off" checked=""> Escuchar
                        </label>
                        <label class="btn btn-sm btn-info btn-simple" id="1">
                          <input type="radio" name="options" autocomplete="off"> Descargar
                        </label>
                        <label class="btn btn-sm btn-primary btn-simple" id="2">
                          <input type="radio" name="options" autocomplete="off"> Instagram
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    
                </div>
            </div>

            <div class="card card-chart">
              <div class="card-header ">
                  <div class="row">
                    <div class="col-sm-6 text-left">
                      <img class="avatar" src="https://t1.kn3.net/taringa/E/1/B/A/3/7/LeandroCenteno/B51.jpg" alt="..." ><h3 class="card-title">El Villano - Morena</h3>
                    </div>
                    <div class="col-sm-6">
                      <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-sm btn-success btn-simple" id="0">
                          <input type="radio" name="options" autocomplete="off" checked=""> Escuchar
                        </label>
                        <label class="btn btn-sm btn-info btn-simple" id="1">
                          <input type="radio" name="options" autocomplete="off"> Descargar
                        </label>
                        <label class="btn btn-sm btn-primary btn-simple" id="2">
                          <input type="radio" name="options" autocomplete="off"> Instagram
                        </label>
                      </div>
                      <a href="" class="fas fa-download btn btn-info" type="radio" name="options" autocomplete="off"></a>
                      <a href="" class="fas fa-play-circle btn btn-success" type="radio" name="options" autocomplete="off"></a>
                      <a href="" class="fas fa-trash-alt btn btn-danger" type="radio" name="options" autocomplete="off"></a>
                      <a href="" class="fab fa-instagram btn btn-primary" type="radio" name="options" autocomplete="off"></a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
      </div>
      <!-- footer -->
      @include('partials.footer')
      <!-- endfooter -->
      
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
 
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

      });
    </script>
</body>

</html>
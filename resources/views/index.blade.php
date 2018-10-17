<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Diseño
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
  <link href="{{'/assets/css/nucleo-icons.css'}}" rel="stylesheet" />
  <link href="{{'/assets/css/bootstrap.min.css'}}" rel="stylesheet" />
  <link href="{{'/assets/css/black-dashboard.css'}}" rel="stylesheet" />
  <link href="{{'/assets/demo/demo.css'}}" rel="stylesheet" />
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
                  <div class="row">
                    @yield('contenido')
                  </div>
                
            </div>
            
              
            

            
        
      </div>
      <!-- footer -->
      {{-- @include('partials.footer') --}}
      <!-- endfooter -->
      
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="{{'/assets/js/core/popper.min.js'}}"></script>
    <script src="{{'/assets/js/core/bootstrap.min.js'}}"></script>
    <script src="{{'/assets/js/plugins/perfect-scrollbar.jquery.min.js'}}"></script>
    <script src="{{'/js/jquery-3.3.1.min.js'}}"></script>
    <script src="{{'/assets/js/plugins/chartjs.min.js'}}"></script>
    <script src="{{'/assets/js/plugins/bootstrap-notify.js'}}"></script>
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <script src="{{'/assets/demo/demo.js'}}"></script>

    @yield('bottom')
    
 
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

      });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>

    <title>Monitoring Kolam Ikan</title>
    <meta charset="utf-8">
   < meta name ="viewport" content="width=device-width, initial-scale=1>
   <link rel="stylessheet" type="text/css" href="css/style.css">
   <script type="text/javascript" src="js/jquery.min.js"><script>
   <script type="text/javascript">
   $(document).ready(function(){
    setInterval( function() {
        $("suhu").load('suhu.php');
        $("ketinggian").load('cekketinggian.php');
        $("cuaca").load('cekcuaca.php');
    },500):
});
</<script>
</script>
    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $('#ceksuhu').load("ceksuhu.php"); },1000);
    });
    </script>
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $('#cekketinggian').load("cekketinggian.php"); },1000);
        });
        /script>
    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $('#cekcuaca').load("cekcuaca.php"); },1000);
    });   
</script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
href="https://fonts.googleeapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet"
href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet"
href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet"
href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet"
href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap-->
<link rel="stylesheet"
href="plugins/jqvmap-bootstrap/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet"
href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet"
ref="plugins//overlayScrollbars/css/overlayScrollbars.min.css">
<!-- Datarange picker -->
<link rel="stylesheet"
href="plugins/daterangepicker/datarangerpicker.css">
<!-- summernote -->
<link rel="stylesheet"
href="plugins/summernote/summernote-bs4.min.css">
</head>
</style>
  .tengah {
    width: 50%;
    margin: 0 auto;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">

<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}
?>


<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center-items-center">
<img class="animation__shake"
src="dist/img/AdminLTElogo.png"
alt="AdminLTELogo" heigh="60" width="60">
</div>

<!--Navbar -->
<nav class="main-header navbar navbar-expand navbar-whitw navbar-light">

<!-- Left navbar links-->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" 
href="#"
role="button">
<i class="fas fa-bars"></i></a></li>
</ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a class="brand-link">
<img src="dist/img/logo.png" 
alt="" 
class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Monitoring Kolam Ikan</span>
</a>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="index.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>logout</p>
</a>
</li>
</ul>
</nav>
</div>
</aside>

<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
<div class="text center">
<div class="col">
<h1>Monitoring Kolam Ikan</h1><br><br>
<div>
</div>
</div>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-sm-2 col-6">
</div>
<div class="col-lg-3 col-6">
<div class="small-box bg-info">
<div class="inner">
<p style="font size : 25px;" >Ketinggian</p>
<h3 style="font-size : 50px;"> <span id="cekketinggian"></span> cm</h3>
</div>
<div class="icon">
<i class="fas fa-water"></i>
</div>

</div>
</div>
<div class="col-lg-3 cool-6">
<div class="small-box bg-info">
<div class="inner">
<p style="font-size: 25px:">Suhu</p>
<he style="font-size: 50px"><span id="ceksuhu"></span><b style="font-size: 45px;"> °C</b></h3>
</div>
<div class="icon">
<i class="fas fa-thermometer-three-quarters"></i>
</div>
</div>
</div>
<div class="col-lg-3 cool-6">
<div class="small-box bg-info">
<div class="inner">
<p style="font-size: 25px:">Cuaca</p>
<he style="font-size: 30px"><span id="cekcuaca"></span><b style="font-size: 30px;"> </b></h3>
</div>
<div class="icon">
<i class="fas fa-cloud"></i>
</div>
</div>
</div>

</div>
</div>
</section>
</div>

</div>

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
   <script src="plugins/sparklines/sparklinesjs"></script>
   <!-- JQVMap --> 
   <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
   <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
   <!-- JQQuery Knob Chart --> 
   <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
   <!-- daterangerpicker --> 
   <script src="plugins/moment/moment.min.js"></script>
   <script src="plugins/daterangepicker/daterangerpicker.js"></script>
   <!-- Tempusdominus Bootstrap 4 --> 
   <script src="pluginstempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote--> 
   <script src="plugins/summernote/summernote-bs4.min.js"></script>
   <!-- overlayScrollbars --> 
   <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE App --> 
   <script src="dist/js/adminlte.js"></script>
   <!-- AdminLTE for demo purposes --> 
   <script src="dist/js/demo.js"></script>
   <!-- AdminLTE dashboard demo (This only for demo purposes)--> 
   <script src="dist/js/pages/dashboard.js"></script>

   </body>
   </html>

   
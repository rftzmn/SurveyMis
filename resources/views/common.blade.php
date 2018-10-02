<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Survey</title>

 <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
 <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('chart')
</head>
<body>
<div class="wrapper">
 
 
   @yield('content')
   @yield('myjs')
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<!-- SparkLine -->
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jVectorMap -->
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{asset('assets/plugins/chartjs-old/Chart.min.js')}}"></script>
</body>
</html>

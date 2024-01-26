<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- plugins:css -->
 <link rel="stylesheet" href="{{asset ('dash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset ('dash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('dash/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset ('dash/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('dash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dash/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset ('dash/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('dash/images/favicon.png')}}" />

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title> @yield('title') </title>
         </head>
         <body>
          <div class="container-scroller">
        @include('dashboard.navbar')
        @include('admin.layout')
          <div class="container-fluid page-body-wrapper">
       @include('dashboard.sidebar')
          @yield('content')

</div>
</div>


  <!-- plugins:js -->
  <script src="{{asset ('dash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('dash/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('dash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('dash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('dash/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('dash/js/off-canvas.js')}}"></script>
  <script src="{{ asset('dash/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('dash/js/template.js')}}"></script>
  <script src="{{ asset('dash/js/settings.js')}}"></script>
  <script src="{{ asset('dash/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('dash/js/dashboard.js')}}"></script>
  <script src="{{ asset('dash/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  </body>

</html>
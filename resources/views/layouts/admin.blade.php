<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin_dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_dashboard/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin_dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin_dashboard/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin_dashboard/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.admin_navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
    @include('layouts.admin_sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.admin_footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('admin_dashboard/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('admin_dashboard/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin_dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin_dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin_dashboard/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin_dashboard/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin_dashboard/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin_dashboard/js/dashboard.js')}}"></script>
  <script src="{{asset('admin_dashboard/js/data-table.js')}}"></script>
  <script src="{{asset('admin_dashboard/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin_dashboard/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>


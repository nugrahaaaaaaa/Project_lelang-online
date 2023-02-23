<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lelangkeun | lelang terpercaya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="{{ asset('template/assets/img/favicon.png')}}" rel="icon"> -->
  <!-- <link href="{{ asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('templet.partials.navbar')
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  @include('templet.partials.sidebar')
</aside>
 <!-- End Sidebar-->

 <main id="main" class="main">
 <!-- End #main -->
 @include('templet.partials.title')

 @include('templet.partials.content')
</main>
  <!-- ======= Footer ======= -->
  <div>  </div>
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Rifki jaya abadi</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/assets/js/main.js')}}"></script>

</body>

</html>
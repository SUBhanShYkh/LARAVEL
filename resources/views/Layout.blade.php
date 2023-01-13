<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LARAVEL_CRUD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('Shered.link')
</head>
<body>
@include('Shered.sidebar')
@include('sweetalert::alert')
@yield('main')



<footer id="footer" class="footer">
    {{-- <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits"> --}}
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> --}}
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@include('Shered.js')
</body>
</html>

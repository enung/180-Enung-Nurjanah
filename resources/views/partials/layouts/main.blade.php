<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>QASFI</title>

  <link href="{{ asset('/temp/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="{{ asset('/temp/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="{{ asset('/temp/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="{{ asset('/temp/css/freelancer.min.css') }}" rel="stylesheet">
  <style type="text/css">

  .textarea {
    background-color:#fff;
    border-radius: 20px;
    color:#000;
    padding:10px 5px 10px 20px;

  }
  .textarea:hover {
    background-color:#fff;
    border-radius: 20px;
    color:#000;
    box-shadow:2px 2px 10px #1e90ff;
  }
</style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">QASFI</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#buku">Buku</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#bantuan">Bantuan</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#informasi">Tentang</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield("content");
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/temp/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/temp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/temp/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/temp/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/temp/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/temp/js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('/temp/js/freelancer.min.js') }}"></script>


  </body>

  </html>

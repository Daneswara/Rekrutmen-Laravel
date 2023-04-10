<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <link rel="manifest" href="manifest.json" crossorigin>
  <meta name="msapplication-config" content="browserconfig.xml">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/assets/imgs/ptkba/logo.png') }}">
  <link href="{{ asset('vendor/assets/css/style.css?version=4.1') }}>" rel="stylesheet">
  <title>@yield('title') </title>
  <style>
    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.3);
      background-color: #F5F5F5;
      border-radius: 8px;
    }

    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
      background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 8px;
      background-image: -webkit-gradient(linear,
          left bottom,
          left top,
          color-stop(0.44, rgb(122, 153, 217)),
          color-stop(0.72, rgb(73, 125, 189)),
          color-stop(0.86, rgb(28, 58, 148)));
    }

    .item-timeline {
      display: flex;
      width: 100%;
      margin-top: 0px;
      margin-bottom: 20px;
    }

    .item-timeline .timeline-year {
      position: relative;
      padding-right: 20px;
      margin-right: 20px;
    }

    .item-timeline .timeline-year::before {
      content: "";
      position: absolute;
      top: 0px;
      right: 0px;
      height: 100%;
      width: 1px;
      border-right: 1px solid #E0E6F7;
    }

    .item-timeline .timeline-year span {
      position: relative;
      border-radius: 30px;
      background-color: #EFF2FB;
      padding: 1px 15px 2px 15px;
      min-width: 130px;
      color: #3C65F5;
      text-align: center;
      display: inline-block;
    }

    .item-timeline .timeline-info {
      position: relative;
      width: 100%;
      padding-right: 30px;
    }

    .item-timeline .timeline-actions {
      min-width: 93px;
      text-align: right;
      display: flex;
      align-items: center;
      padding-left: 20px;
    }

    .box-upload {
      border: 2px dashed #B4C0E0;
      border-radius: 8px;
      padding: 15px 18px;
      background-color: #ffffff;
    }

    .box-upload .add-file-upload {
      width: 85px;
      height: 85px;
      border: 1px solid #E0E6F6;
      border-radius: 16px;
      background: #ffffff url(admin/assets/imgs/page/post-job/plus.svg) no-repeat center;
      margin-right: 15px;
      position: relative;
      display: inline-block;
      vertical-align: middle;
    }

    .box-upload .add-file-upload input {
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      height: 100%;
      z-index: 12;
      opacity: 0;
    }

    .box-file-uploaded {
      height: 100%;
      padding-bottom: 30px;
    }

    .btn.btn-delete {
      color: #E45959;
      font-size: 14px;
      line-height: 14px;
      text-decoration: underline;
      padding: 11px 20px 13px 20px;
    }
  </style>
  @yield('js_atas')
  @yield('css')
</head>

<body class="@yield('body_class')">
  @include('/layout/preloader')

  <header class="header sticky-bar">
    @include('/layout/topbar')
  </header>
  @include('/layout/topbar_mobile')
  @yield('main')
  @yield('modal')
  @yield('footer')
  @yield('css_bawah')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{asset('vendor/assets/js/plugins/counterup.js') }}"></script>
  <script src="{{asset('vendor/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/waypoints.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/wow.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/magnific-popup.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/select2.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/isotope.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/scrollup.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('vendor/assets/js/plugins/counterup.js') }}"></script>
  <script src="{{asset('vendor/assets/js/main.js?v=4.1') }}"></script>
  @yield('js')
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>New Work</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Dashboard_assets/img/health_safety_environment.jpg')}}" rel="icon">
  <link href="{{ asset( 'Dashboard_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('Dashboard_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="'{{ asset ('Dashboard_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset ('Dashboard_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->


  <link href="{{asset('Dashboard_assets/css/style.css')}}" rel="stylesheet">
  <style>
    /* Change navbar item color to black */
    .navbar-nav .nav-item {
        color: black; /* Change to black */
    }

    /* Change navbar item hover color */
    .navbar-nav .nav-item:hover {
        color: #333; /* A slightly darker shade on hover */
    }

    /* Change sub-item color to grey */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        color: grey; /* Change sub-item color to grey */
    }

    /* Change sub-item hover color */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        color: white; /* Change to white on hover for contrast */
        background-color: gray; /* Background color on hover */
    }

    /* Additional styles for the page */
    body {
        padding: 20px;
    }

    .content {
        text-align: center;
        margin-top: 50px;
    }
</style>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('Dashboard_assets/img/health_safety_environment.jpg') }}" style="width: 115px;" alt="Logo">
        </a>
        <i style="font-size:22px;position: relative;left:-22px;" class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Search Icon -->
<li class="nav-item">
    <a class="nav-link nav-icon search-bar-toggle" href="#" style="color: darkgray; transition: none; font-size: 15px;">
        <i class="bi bi-search"></i>
    </a>
</li><!-- End Search Icon -->


            <!-- Notification Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color:#f71381; transition: none; font-size: 15px;" title="Notifications">
                    <i class="bi bi-bell"></i>
                </a>
            </li><!-- End Notification Icon -->

            <!-- New Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color: darkgray; transition: none; font-size: 15px;" title="Create New">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </li><!-- End New Icon -->

            <!-- Profile Icon -->
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color: darkgray; transition: none; font-size: 15px;">
                    <i class="bi bi-person-circle"></i> <!-- Profile icon instead of image -->
                    <span class="d-none d-md-block ps-2">Admin</span>
                </a><!-- End Profile Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    {{-- <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li> --}}

                    {{-- <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}

                </ul><!-- End Profile Dropdown Items -->
            </li>
            <!-- End Profile Nav -->

            <!-- Logout Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color: darkgray; transition: none; font-size: 15px;" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </li><!-- End Logout Icon -->
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->



 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

@if(Auth::check())
@if (Auth::user()->role_id==1)
@include("Layout.menu.account")
@endif
@if (Auth::user()->role_id==2)
@include("Layout.menu.manage")
@endif
@endif

</aside><!-- End Sidebar -->

{{-- sidebar --}}

{{-- content --}}

<main id="main" class="main">
@yield('AdminContent')
</main>
{{-- content --}}


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>New_Work</span></strong>. All Rights Reserved
        </div>


      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset ('Dashboard_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/chart.js/chart.umd.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/echarts/echarts.min.js')}}"></script>
      <script src="{{ asset('Dashboard_assets/vendor/quill/quill.js')}}"></script>
      <script src=  "{{ asset( 'Dashboard_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/tinymce/tinymce.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/php-email-form/validate.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{  asset('Dashboard_assets/js/main.js')}}"></script>

    </body>

    </html>

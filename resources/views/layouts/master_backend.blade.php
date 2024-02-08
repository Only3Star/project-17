
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chamichi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{asset('backend/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/chamichi_mini.png') }}" />
</head>
<body>
    <!-- ทำแจ้งเตือนด้วย sweetalert -->
    @include('sweetalert::alert')

  <div class="container-scroller">
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/royalui/"><i class="ti-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="ti-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="{{url('/dashboard')}}"><img src="{{asset('backend/images/chamichi.jpg') }}" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img src="{{asset('backend/images/chamichi_mini.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
            </a>
          </li>
          <li class="nav-item dropdown">
              <span class="count"></span>
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('backend/images/faces/face.jpg') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('profile.edit') }}">
                <i class="ti-settings text-primary"></i>
                My Profile
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
                </a>
                 </form>
                </li>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">DashBoard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('u.index') }}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('u.category') }}">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('u.product') }}">                                 

              <i class="ti-layers-alt menu-icon"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>
            </a>
          </li>
          
        </ul>
      </nav>

        <!-- partial -->
        @yield('contant')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('backend/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backend/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js') }}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{asset('backend/js/template.js') }}"></script>
  <script src="{{asset('backend/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{asset('admin/img/kaiadmin/favicon.ico')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('admin/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset('admin/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->

     <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{asset('admin/css/plugins.min.css')}}" />

    <!-- kaiadmin -->
    <link rel="stylesheet" href="{{asset('admin/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link rel="stylesheet" href="{{asset('admin/css/demo.css')}}" /> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
  </head>
  <body>




<div class="wrapper">
      <!-- Sidebar -->
       @include('components.admin.sidenav')
      <!-- End Sidebar -->

      <div class="main-panel">

      <!-- Main Header -->
      @include('components.admin.header')
      <!-- End Main Header -->
  

        <div class="container">
          <div class="page-inner">
            <div class= "align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div class="row">
                <div class="col-12">
                  <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                  </div>
                </div>
              </div>


            @include('components.admin.notification')
            <!-- Main Content -->
            @yield('content')
            <!-- End Main Content -->
             

            </div>
           
          
       
          </div>
        </div>

      <!-- footer start -->
      @include('components.admin.footer')
      <!-- footer end -->
      </div>

     
    </div>

  <!--   Core JS Files   -->
  <script src="{{asset('admin/js/core/jquery-3.7.1.min.js')}}"></script>
    <script  src="{{asset('admin/js/core/popper.min.js')}}"></script>
    <script  src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script  src="{{asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script  src="{{asset('admin/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script  src="{{asset('admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script  src="{{asset('admin/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script  src="{{asset('admin/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script  src="{{asset('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script  src="{{asset('admin/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script  src="{{asset('admin/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script  src="{{asset('admin/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script  src="{{asset('admin/js/kaiadmin.min.js')}}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script  src="{{asset('admin/js/setting-demo.js')}}"></script>
    <!-- <script  src="{{asset('admin/js/demo.js')}}"></script> -->
    



    <!-- Custom JS -->
     <script src="{{asset('admin/js/main.js')}}"></script>
     @stack('scripts')
  </body>
</html>

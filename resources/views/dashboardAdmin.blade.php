<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="js/murid/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="js/murid/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="js/murid/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="js/murid/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="js/murid/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="js/murid/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="js/murid/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="js/murid/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Giyok Putra</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin Giyok Putra</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{url('/admin')}}"><i class="fa fa-laptop"></i>Dashboard</a></li>
                    <li><a><i class="fa fa-calendar"></i>Murid<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{url('/admin-calonMurid')}}"><i class="fa fa-user"></i>Calon Murid</a></li>
                        <li><a href="{{url('/admin-murid')}}"><i class="fa fa-user"></i>Murid</a></li>
                        <li><a href="{{url('/admin-lulusan')}}"><i class="fa fa-user"></i>Lulusan</a></li>
                    </ul>
                  </li>
                    <li><a href="{{url('/admin-instruktur')}}"><i class="fa fa-users"></i>Instruktur</a></li>
                    <li><a href="{{url('/admin-jadwal')}}"><i class="fa fa-calendar"></i>Jadwal</a></li>
                    <li><a href="{{url('/admin-paket')}}"><i class="fa fa-book"></i>Paket</a></li>
                    <li><a href="{{url('/admin-testimoni')}}"><i class="fa fa-image"></i>Testimoni</a></li>
                    <li><a href="{{url('/admin-pemasukkan')}}"><i class="fa fa-money"></i>Pemasukkan</a></li>
                    <li><a href="{{url('/admin-pengeluaran')}}"><i class="fa fa-money"></i>Pengeluaran</a></li>
                  <li><a href="{{url('/keluar')}}"><i class="fa fa-sign-out"></i>Keluar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>
            </div>
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Calon Murid</span>
              <div class="count">{{$calonMurid}}</div>
              <span class="count_bottom"><i class="green"></i> Orang</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Murid</span>
              <div class="count">{{$murid}}</div>
              <span class="count_bottom"><i class="green"></i>Orang</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Lulusan</span>
              <div class="count">{{$lulusan}}</div>
              <span class="count_bottom"><i class="green"></i>Orang</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Instruktur</span>
              <div class="count">5</div>
              <span class="count_bottom"><i class="green"></i>Orang</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar"></i> Jadwal</span>
              <div class="count">{{$jadwal}}</div>
              <span class="count_bottom"><i class="green"></i>Waktu</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-book"></i> Paket</span>
              <div class="count">{{$paket}}</div>
              <span class="count_bottom"><i class="green"></i>Jenis</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-book"></i> Testimoni</span>
              <div class="count">{{$testimoni}}</div>
              <span class="count_bottom"><i class="green"></i>Foto</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Pemasukkan</span>
              <div class="count">{{$pemasukkan}}</div>
              <span class="count_bottom"><i class="green"></i>IDR</span>
            </div>

            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Pengeluaran</span>
              <div class="count">{{$pengeluaran}}</div>
              <span class="count_bottom"><i class="green"></i>IDR</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
               <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/murid/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/murid/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="js/murid/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/murid/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="js/murid/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="js/murid/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="js/murid/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="js/murid/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="js/murid/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="js/murid/vendors/Flot/jquery.flot.js"></script>
    <script src="js/murid/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="js/murid/vendors/Flot/jquery.flot.time.js"></script>
    <script src="js/murid/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="js/murid/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/murid/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="js/murid/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="js/murid/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="js/murid/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="js/murid/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="js/murid/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="js/murid/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/murid/vendors/moment/min/moment.min.js"></script>
    <script src="js/murid/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/murid/build/js/custom.min.js"></script>
    
  </body>
</html>

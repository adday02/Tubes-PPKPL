<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Murid</title>

    <!-- Bootstrap -->
    <link href="css/murid/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/murid/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/murid/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="css/murid/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="css/murid/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="css/murid/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="css/murid/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="css/murid/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="css/murid/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/murid/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php if(auth()->user()->level!="calon murid") 
    {
    ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/murid')}}" class="site_title"><i class="fa fa-car"></i> <span>Giyok Putra</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <img height="110px" width="150px" class="profile_info" src="{{URL::to('/')}}/foto/{{auth()->user()->foto}}" >
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->nama}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 <li><a href="{{url('/murid')}}"><i class="fa fa-user"></i>Profile</a></li>
                  <li><a><i class="fa fa-calendar"></i> Jadwal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{url('/murid-jadwalsemua')}}"></i>Jadwal Semua Murid</a></li>
                        <li><a href="{{url('/murid-jadwal')}}"></i>Jadwal Pribadi</a></li>
                    </ul>
                  <li><a href="{{url('/murid-riwayatPembelajaran')}}"><i class="fa fa-book"></i>Riwayat Pembelajaran</a></li>
                  <li><a href="{{url('/keluar')}}"><i class="fa fa-sign-out"></i>Keluar</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Riwayat Pembelajaran</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Tanggal </th>
                            <th class="column-title">Instruktur</th>
                            <th class="column-title">Saran</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($datas as $data)
                        <?php 
                        if ($data->nik==auth()->user()->nik)
                          {
                         ?>
                          <tr class="even pointer">
                            <td class=" ">{{++$i}}</td>
                            <td class=" ">{{$data->tanggal}}</td>
                            <td class=" ">{{$data->instruktur->nama}}</td>
                            <td class=" ">{{$data->saran}}</td>
                            </td>
                          </tr>
                          <?php } ?>
                          @endforeach
                        
                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>
                  </div>
                </div>
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
    <!-- bootstrap-progressbar -->
    <script src="js/murid/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="js/murid/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/murid/vendors/moment/min/moment.min.js"></script>
    <script src="js/murid/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="js/murid/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="js/murid/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="js/murid/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="js/murid/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="js/murid/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="js/murid/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="js/murid/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="js/murid/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="js/murid/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="js/murid/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/murid/build/js/custom.min.js"></script>
  <?php }else{ ?>
   <h1>Anda Belum melakukan Aktifasi Akun Silahkan Klik tombol <a href="{{url('/keluar')}}"><i class="fa fa-sign-out"></i>Keluar</a></h1>
    
  <?php } ?>

  </body>
</html>

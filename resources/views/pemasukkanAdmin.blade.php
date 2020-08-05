<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pemasukkan</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="js/murid/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="js/murid/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="js/murid/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="js/murid/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="js/murid/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="js/murid/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="js/murid/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="js/murid/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="js/murid/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
            <!-- /sidebar menu -->        
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Pemasukkan</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <div style="float:right; margin-right:15px">
                                        <button type="button" class="btn btn-success" data-toggle="modal" 
                                                data-target="#tambah-pemasukkan" >Tambah Pemasukkan</button>
                                    </div>
                                
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total_pemasukkan=0; ?>
                                    @foreach($datas as $data)
                                    <?php $total_pemasukkan=$total_pemasukkan+$data->nominal; ?>
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$data->tanggal}}</td>
                                        <td>{{$data->jenis}}</td>
                                        <td>{{$data->nominal}}</td>
                                        <td>
                                            <div class="col-sm-2">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" 
                                                data-target="#edit-pemasukkan{{$data->id_pemasukkan}}" ><i class="fa fa-pencil"></i></button>
                                            </div>
                                            <div class="col-sm-2">    
                                            <form action="{{route('admin-pemasukkan.destroy', $data->id_pemasukkan)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <th colspan="3">Jumlah</th>
                                    <th>{{$total_pemasukkan}}</th>
                                </tfoot>
                                </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
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
    <!-- iCheck -->
    <script src="js/murid/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="js/murid/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/murid/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="js/murid/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="js/murid/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="js/murid/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="js/murid/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="js/murid/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="js/murid/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="js/murid/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="js/murid/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="js/murid/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="js/murid/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="js/murid/vendors/jszip/dist/jszip.min.js"></script>
    <script src="js/murid/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="js/murid/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/murid/build/js/custom.min.js"></script>

<div id="tambah-pemasukkan" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Pemasukkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('admin-pemasukkan.store')}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jenis</label>
                    <div class="col-sm-8">
                        <input type="text" name="jenis" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nominal</label>
                    <div class="col-sm-8">
                        <input type="tel" name="nominal" class="form-control" required pattern="[0-9]{1,11}" title="Masukkan Nominal dengan format Angka">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>



@foreach ($datas as $data)
<!-- Modal Ubah Data  -->
<div id="edit-pemasukkan{{$data->id_pemasukkan}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Ubah Profil Pemasukkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('admin-pemasukkan.update', $data->id_pemasukkan)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-8">        
                        <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jenis</label>
                    <div class="col-sm-8">
                        <input type="text" name="jenis" class="form-control" value="{{ $data->jenis }}" required>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nominal</label>
                    <div class="col-sm-8">
                        <input type="number" name="nominal" class="form-control" value="{{ $data->nominal }}" required pattern="[0-9]{1,11}" title="Masukkan Nominal dengan format Angka">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach
  </body>
</html>
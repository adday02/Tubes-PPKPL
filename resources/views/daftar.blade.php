<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar</title>

    <!-- Bootstrap -->
    <link href="css/login/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/login/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/login/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/login/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/login/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
          <section class="login_content">
            <form action="{{route('daftar.store')}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            	
	            <h1>Aktifasi Akun</h1>
              	<p>- Isi form di bawah ini<br> 
              	   - Datang ke tempat kursus<br>
              	   - Melakukan Pembayaran Cash/Mengangsur
                   - Membawa KTP<br>
                   - Membawa foto 3x4 Berwarna <br>
                 </p>
                @csrf
	            <div>
	            	<input type="text" name="nik" class="form-control" placeholder="NIK"  required pattern="[0-9]{16}" title="Masukkan NIK sebanyak 16 Digit dengan format Nomor">
	            </div>
	            <div>
	                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required pattern="^[a-zA-Z\s]*$" title="Masukkan Nama Lengkap hanya dengan huruf">
	            </div>
	            <div>
	                <input type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div>
	                <select class="form-control" type="text" name="id_paket" required>
	                	<option disabled="" selected="" value="">--Paket Kursus--</option>
	                    <?php foreach($data_paket as $data) { ?>
	                    <option value="<?= $data->id_paket;?>"><?= $data->nama; ?></option>
	                    <?php } ?>
	                </select>
	            </div>
	            <br>
	            <div>
	                <select class="form-control" type="text" name="jk" required>
	                	<option disabled="" selected="" value="">--Jenis Kelamin--</option>
	                    <option>Laki-laki</option>
	                    <option>Perempuan</option>
	                    
	                </select>
	            </div>
	            <br>
	            <div>
	                <input type="text" class="form-control" placeholder="No HP" name="no_hp" required pattern="[0-9]{11,12}" title="Masukkan No HP sebanyak 11-12 Digit dengan format Nomor">
	            </div>
	            <div>
	                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
	            </div>
	            <br>
	            <div class="row form-group">
                    <label class="col-sm-4 control-label">Foto</label>
                    <div class="col-sm-8">        
                        <input type="file" name="foto" class="form-control" required>

                    </div>
                </div>
	            <div>
	             <input type="hidden" name="level" value="calon murid">
	         	</div>
 				<div>
                <button type="submit" class="btn btn-primary">Daftar</button>
              	</div>
                 <a href="{{URL('/')}}">Kembali</a>
            </form>
          </section>
      </div>
  </body>
</html>

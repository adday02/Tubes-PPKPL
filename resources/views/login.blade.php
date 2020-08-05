
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
            <form action="/kirimdata" method="Post">
            	{{csrf_field()}}
              <h1>Syarat Login</h1>
              <p>- Sudah melakukan pendaftaran<br>
                  - Sudah melakukan aktivasi akun</p>
              <div>
                <input type="text" class="form-control" name="username" placeholder="NIK" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button  class="btn btn-successt">Log in</button>
              </div>
                <a href="{{URL('/')}}">Kembali</a>
            </form>
          </section>
      </div>
  </body>
</html>

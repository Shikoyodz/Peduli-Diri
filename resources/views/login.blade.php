@include('style')
@if (session('Alert'))
<div class="alert alert-danger  alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">
        <span>&times;</span>
      </button>
      <Strong>Anda Telah Berhasil Logout</Strong>
    </div>
  </div>
@endif
@if (session('AlertRegister'))
<div class="alert alert-success  alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">
        <span>&times;</span>
      </button>
      <Strong>Anda Berhasil Register</Strong>
    </div>
  </div>
@endif

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>
</head>

<body>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" >
                <div class="login-brand">
                    <img src="{{ asset('') }}assets/img/Logo.png" alt="logo" width="150" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                <div class="card-header"><h4>Login</h4></div>

                <div class="card-body">
                  <form method="POST" action="/createLogin">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input id="nama" type="text" class="form-control" name="nama" tabindex="1" required autofocus>
                          <div class="invalid-feedback">
                            Harap isi Nama Lengkap
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="email">NIK</label>
                        <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus>
                        <input id="password" type="hidden" class="form-control" name="password" tabindex="1" required autofocus>
                          <div class="invalid-feedback">
                            Harap isi NIK
                          </div>
                      </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                      </button>
                    </div>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="/register">Create One</a>
                        </div>
                  </form>

                </div>
                </div>


            </div>
        </div>
        </div>
      </section>
    </div>
</body>

<script>
    window.onload = function(){
      var src = document.getElementById("email"),
          dst = document.getElementById("password");
      src.addEventListener('input', function(){
        dst.value = src.value;
      });
    };
</script>

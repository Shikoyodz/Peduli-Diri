
<!DOCTYPE html>
<html lang="en">
@include('style')
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('') }}assets/img/Logo.png" alt="logo" width="150" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="simpanUser" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                          Tolong isi email!
                        </div>
                      </div>

                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="number" class="form-control" name="nik"  tabindex="1" onKeyPress="if(this.value.length==16) return false;" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" min="0" required autofocus>
                    <div class="invalid-feedback">
                      Tolong isi NIK!
                    </div>
                  </div>

                  <form method="POST" action="simpanUser" class="needs-validation" novalidate="">
                    <div class="form-group">
                      <label for="name_lengkap">Nama</label>
                      <input id="name_lengkap" type="text" class="form-control" name="name_lengkap" tabindex="2"  required autofocus>
                      <div class="invalid-feedback">
                        Tolong isi Nama!
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Farel Anugrah Al Fauzan
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>

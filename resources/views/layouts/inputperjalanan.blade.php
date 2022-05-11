<!--  Input Data Perjalanan  -->
@extends('layouts.master')

@section('title')
    Input Perjalanan
@endsection

@section('content')
<body>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

              <div class="card card-primary">
                    <div class="card-body">
                      <form method="POST" action="simpanData" class="needs-validation" novalidate="">
                          @csrf
                          {{-- <div class="form-group">
                              <label for="id_user">User ID</label>
                              <input id="id_user" type="id_user" class="form-control" name="id_user" tabindex="1" required autofocus>
                              <div class="invalid-feedback">
                                Tolong Isi User ID Anda!
                              </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="tanggal" type="date" class="form-control" name="tanggal" tabindex="2" required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Tanggal!
                            </div>

                            <div class="form-group">
                                <label for="waktu">Jam</label>
                                <input id="waktu" type="time" class="form-control" name="waktu" tabindex="2" required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Tanggal!
                            </div>

                            <div class="form-group">
                                <label for="lokasi">Alamat</label>
                                <input id="lokasi" type="text" class="form-control" name="lokasi" tabindex="3" required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Alamat Anda!
                            </div>
                             <div class="form-group">
                                <label for="Suhu">Suhu</label>
                                <input id="Suhu"  type="number" class="form-control" name="Suhu" min="30" tabindex="4"  required autofocus>
                                <div class="invalid-feedback">
                                    Tolong isi Suhu dengan benar Anda!
                                </div>
                            </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Input
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="simple-footer">
                Copyright &copy; 2022 <div class="bullet"></div> Design By <a
                        href="https://www.instagram.com/itsmekoyod/">Farel Anugrah Al Fauzan</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection

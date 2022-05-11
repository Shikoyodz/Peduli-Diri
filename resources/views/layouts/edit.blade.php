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
                      <form method="POST" action="updateData" class="needs-validation" novalidate="">
                          @csrf
                          <input id="id" value="{{ $data->id }}" wakt type="hidden" class="form-control" name="id"  required autofocus>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="tanggal" value="{{ $data->tanggal }}" wakt type="date" class="form-control" name="tanggal" max="{{ date('Y-m-d') }}" required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Tanggal!
                            </div>

                            <div class="form-group">
                                <label for="waktu">Jam</label>
                                <input id="waktu" value="{{ $data->waktu }}" type="time" class="form-control" name="waktu"  required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Tanggal!
                            </div>

                            <div class="form-group">
                                <label for="lokasi">Alamat</label>
                                <input id="lokasi" value="{{ $data->lokasi }}" type="text" class="form-control" name="lokasi"  required autofocus>
                            <div class="invalid-feedback">
                                Tolong isi Alamat Anda!
                            </div>
                             <div class="form-group">
                                <label for="Suhu">Suhu</label>
                                <input id="Suhu" value="{{ $data->Suhu }}" type="number" class="form-control" name="Suhu" min="34" max="40" tabindex="4"  required autofocus>
                                <div class="invalid-feedback">
                                    Tolong isi Suhu Anda dengan benar !
                                </div>
                            </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Update
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

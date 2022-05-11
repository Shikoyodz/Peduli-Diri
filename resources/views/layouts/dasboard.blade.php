<!--  Input Data Siswa -->
@extends('layouts.master')

@section('title')
    Selamat datang di Peduli Diri,
    @if (!empty(auth()->user()->nama))
        {{ auth()->user()->nama }}
    @else
        Guest
    @endif
@endsection

@section('content')
<div class="d-flex">
    <div class="view overlay zoom flex-fill" style="margin-left:40px; width:500px">
        <button><a href="/inputperjalanan">
            <img src="https://blog.aksiamal.com/wp-content/uploads/2020/07/CHARITY.jpg" class="img-fluid" alt="zoom"
            style="height: 200px; width: 350px;">
            <div class="mask flex-center waves-effect waves-light">
                <h3 class="white-text">Input Perjalanan</h3>
            </div>
        </a>
        </button>
    </div>

    <div class="view overlay zoom flex-fill" style="margin-left:40px; width:500px">
        <button><a href="/">
            <img src="{{ asset('') }}assets/img/table.jpg"
                class="img-fluid" alt="zoom" style="height: 200px; width: 350px;">
            <div class="mask flex-center waves-effect waves-light">
                <h3 class="white-text" style="text-decoration:none">Dokumentasi</h3>
            </div>
        </a>
        </button>
    </div>
</div>
@endsection

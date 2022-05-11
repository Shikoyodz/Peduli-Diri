<!-- Dokumentasi tabel -->
@extends('layouts.master')
@section('title')
    Dokumentasi
@endsection
@section('content')
    @php
    $no = 1;
    @endphp
    <div class="card-body">
        <table class="table table-striped table-light" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    {{-- <th scope="col">Id_user</th> --}}
                    <th scope="col">Tanggal
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <form action="/urut" method="GET">
                                @csrf
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <button class="dropdown-item" name="tanggalDesc" value="Desc"
                                        href="/urut">Terbaru</button>
                                    <button class="dropdown-item" name="tanggalAsc" value="Asc"
                                        href="/urut">Terlama</button>
                                </div>
                            </form>
                        </div>
                    </th>
                    <th scope="col">Waktu
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <form action="/urut" method="GET">
                                @csrf
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <button class="dropdown-item" name="waktuDesc" value="Desc"
                                        href="/urut">Terbaru</button>
                                    <button class="dropdown-item" name="waktuAsc" value="Asc" href="/urut">Terlama</button>
                                </div>
                            </form>
                        </div>
                    </th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Suhu
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <form action="/urut" method="GET">
                                @csrf
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <button class="dropdown-item" name="suhuDesc" value="Desc" href="/urut">Suhu
                                        Tertinggi</button>
                                    <button class="dropdown-item" name="suhuAsc" value="Asc" href="/urut">Suhu
                                        Terendah</button>
                                </div>
                            </form>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $peduli_diri)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        {{-- <td>{{ $peduli_diri->id_user }}</td> --}}
                        <td>{{ $peduli_diri->tanggal }}</td>
                        <td>{{ $peduli_diri->waktu }}</td>
                        <td>{{ $peduli_diri->lokasi }}</td>
                        <td>{{ $peduli_diri->Suhu }} ℃</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links() }}
    {{-- 'pagination::bootstrap-4' --}}
    </div>

    {{-- <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script> --}}
@endsection

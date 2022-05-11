<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    {{-- GET untuk mengambil data --}}
    <form class="form-inline mr-auto" action="/cari" method="GET">
        {{-- @csrf berfungsi sebagai Pelindung yang melindungi data dari web atau data dari luar --}}
        @csrf
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <div class="col-auto">
            <select onchange="yesnoCheck(this);" class="form-control form-select" type="search">
                <option value="lokasi">lokasi</option>
                <option value="tanggal">tanggal</option>
                <option value="waktu">waktu</option>
                <option value="Suhu">suhu</option>
            </select>
        </div>
        <div class="col">
            <div class="form-group">
                <input name="lokasi" id="lokasi" class="form-control" type="search" placeholder="Cari Lokasi"
                    aria-label="Search">
                <button id="lokasiBtn" class="btn btn-outline-primary" type="submit">
                    <i class="fas fa-search"></i></button>
            </div>

            <div class="form-group">
                <input name="tanggal" id="tanggal" style="display: none;" class="form-control" type="date"
                    placeholder="Cari tanggal" aria-label="Search">
                <button id="tanggalBtn" style="display: none;" class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"><i class="fas fa-search"></i></button>
            </div>

            <div class="form-group">
                <input name="waktu" id="waktu" style="display: none;" class="form-control" type="time"
                    placeholder="Cari waktu" aria-label="Search">
                <button id="waktuBtn" style="display: none;" class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i></button>
            </div>

            <div class="form-group">
                <input name="Suhu" id="Suhu" style="display: none;" class="form-control" type="number"
                    placeholder="Cari Suhu" aria-label="Search">
                <button id="SuhuBtn" style="display: none;" class="btn btn-outline-primary my-2 my-sm-0"type="submit">
                    <i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="search-backdrop"></div>
    </form>
    {{-- Untuk memumculkan nama user dari database user --}}
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('') }}assets/img/Farel.jpg" alt="logo" style="width: 40px" class="rounded-circle">
                <div class="d-sm-none d-lg-inline-block">Hai,
                    @if (!empty(auth()->user()->nama))
                        {{ auth()->user()->nama }}
                    @else
                        Guest
                    @endif
                </div>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="{{ asset('') }}assets/img/Farel.jpg" alt="Profile image" style="width: 60px">
                        <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->nama }}</p>
                        <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                      </div>
                    <a href="logout" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
        </li>
    </ul>
</nav>
{{-- Fungsi script untuk memberikan selecet option pada search di navbar --}}
<script>
    function yesnoCheck(that) {
        if (that.value == "lokasi") {
            document.getElementById("lokasi").style.display = "block";
            document.getElementById("lokasi").required = true;
            document.getElementById("lokasiBtn").style.display = "block";

            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";
            document.getElementById("tanggal").value = "";
            document.getElementById("tanggal").required = false;

            document.getElementById("waktu").style.display = "none";
            document.getElementById("waktuBtn").style.display = "none";
            document.getElementById("waktu").value = "";
            document.getElementById("waktu").required = false;

            document.getElementById("Suhu").style.display = "none";
            document.getElementById("SuhuBtn").style.display = "none";
            document.getElementById("Suhu").value = "";
            document.getElementById("Suhu").required = false;

        } else if (that.value == "tanggal") {
            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";
            document.getElementById("lokasi").value = "";
            document.getElementById("lokasi").required = false;

            document.getElementById("tanggal").style.display = "block";
            document.getElementById("tanggal").required = true;
            document.getElementById("tanggalBtn").style.display = "block";

            document.getElementById("waktu").style.display = "none";
            document.getElementById("waktuBtn").style.display = "none";
            document.getElementById("waktu").value = "";
            document.getElementById("waktu").required = false;

            document.getElementById("Suhu").style.display = "none";
            document.getElementById("SuhuBtn").style.display = "none";
            document.getElementById("Suhu").value = "";
            document.getElementById("Suhu").required = false;

        } else if (that.value == "waktu") {
            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";
            document.getElementById("lokasi").value = "";
            document.getElementById("lokasi").required = false;

            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";
            document.getElementById("tanggal").value = "";
            document.getElementById("tanggal").required = false;

            document.getElementById("waktu").style.display = "block";
            document.getElementById("waktu").required = true;
            document.getElementById("waktuBtn").style.display = "block";

            document.getElementById("Suhu").style.display = "none";
            document.getElementById("SuhuBtn").style.display = "none";
            document.getElementById("Suhu").value = "";
            document.getElementById("Suhu").required = false;

        } else {
            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";
            document.getElementById("lokasi").value = "";
            document.getElementById("lokasi").required = false;

            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";
            document.getElementById("tanggal").value = "";
            document.getElementById("tanggal").required = false;

            document.getElementById("waktu").style.display = "none";
            document.getElementById("waktuBtn").style.display = "none";
            document.getElementById("waktu").value = "";
            document.getElementById("waktu").required = false;

            document.getElementById("Suhu").style.display = "block";
            document.getElementById("Suhu").required = true;
            document.getElementById("SuhuBtn").style.display = "block";

        }
    }
</script>

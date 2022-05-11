<!DOCTYPE html>
<html lang="en">

<body>
    @include('style')

    <div id="app">
        <div class="main-wrapper">
            @include('navbar')
            @include('sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                    </div>
                    <!-- Body Untuk diganti -->
                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>

            <!-- Footer -->
            <footer class="main-footer" style="color: white;">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a
                        href="https://www.instagram.com/itsmekoyod/">Farel Anugrah Al Fauzan</a>
                </div>
                <div class="footer-right">
                    XII RPL 1
                </div>
            </footer>
        </div>
    </div>
</body>
</html>

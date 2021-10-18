@extends('layouts.main')

@section('container')  
<body>
    <!-- 
        Feature start
        ==================== -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>SIMBIMI Fitur</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-alarm-outline"></i>
                        <h4 class="font-weight-bold mb-2">Daftar</h4>
                        <p>segera daftarkan diri anda sebagai penerima bidikmisi, sebelum terlambat</p>
                    </div>
                    <div class="mb-40 text-center text-md-left">
                        <h4 class="font-weight-bold mb-2">Pengumuman</h4>
                        <p>cek fitur ini, apakah nama anda tercantum sebagai pendaftar yang lolos seleksi?</p>
                    </div>
                </div>
                <div class="col-md-4 text-center align-self-Top mb-4 mb-md-0">
                    <img src=" img/{{ $image }}" alt=" " width="250px">
                </div>
                <div class="col-md-4">
                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-alarm-outline"></i>
                        <h4 class="font-weight-bold mb-2">Informasi Timeline</h4>
                        <p>pastikan anda mengecek timeline agar tidak ketinggalan informasi terbaru</p>
                    </div>
                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-bell-outline"></i>
                        <h4 class="font-weight-bold mb-2">Profile</h4>
                        <p>rubah data yang kurang sesuai, pastikan data sesuai karena merupakan syarat penerimaan</p>
                    </div>
                </div>
            </div>
        </div><!-- .container close -->
    </section><!-- #service close -->

    </body>
@endsection

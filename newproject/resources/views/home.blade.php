@extends('layouts.main')

@section('container')

    <!-- hero area -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <img src=" img/{{ $image }}" alt="{{ $name }}" width="400">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="block">
                        <h1 class="font-weight-bold mb-4 font-size-60">SIMBIMI</h1>
                        <p class="mb-4 ">Kami akan membantu anda mendaftar bidikmisi. disini anda dapat 
                            melakukan pengajuan bidikmisi dan cek hasil pengajuan. ingin tahu informasi lebih lanjut? silahkan login terlebih dahulu
                        </p>
                        <a class="btn btn-main" href="/loginmhs" role="button">Mahasiswa</a>
                        <a class="btn btn-main" href="/loginadm" role="button">Admin</a>
                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->

@endsection
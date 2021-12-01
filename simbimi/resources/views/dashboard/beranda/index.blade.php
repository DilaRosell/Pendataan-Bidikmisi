@extends('dashboard.layouts.master')
 
@section('content')
 
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">{{ $pesan }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    @if($cek > 0)                                        
                                    <div class="small text-black"><i class="fa fa-print"></i>
                                    <a class="big text-black stretched-link" href="{{ url('cetak-biodata') }}">Cetak Bukti Pendaftaran</a>
                                    </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">{{ $status }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">{{ $pesan_lulus }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </main>
                @endsection
                @section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection
@extends('layouts.t_cekhasil')
@section('title','Detail')
@section ('content')

<table class="table">
    <tr>
        <th width="80px">Nama Lengkap</th>
        <th width="30px">:</th>
        <th>{{ $cekhasil->nama_mhs }}</th>
    </tr>
    <tr>
        <th width="80px">NIM</th>
        <th width="30px">:</th>
        <th>{{ $cekhasil->nim }}</th>
    </tr>
    <tr>
        <th width="80px">File KTP</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_ktp/'.$cekhasil->file_ktp)}}" width="10px"></th>
    </tr>
    <tr>
        <th width="80px">File KK</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_kk/'.$cekhasil->file_kk)}}" width="10px"></th>
    </tr>
    <tr>
        <th width="80px">File KTM</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_ktm/'.$cekhasil->file_ktm)}}" width="10px"></th>
    </tr>
    <tr>
        <th width="80px">File SKD</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_skd/'.$cekhasil->file_skd)}}" width="10px"></th>
    </tr>
    <tr>
        <th><a href="/cekhasil" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>

</table>

@endsection
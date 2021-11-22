@extends('layouts.t_daftar')

@section ('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/daftar/insert" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input type="text" name="nama_mhs" class="form-control" value="{{ old('nama_mhs') }}" id="exampleInputNama" placeholder="Masukkan nama anda">
                    <div class="text-danger">
                        @error('nama_mhs')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNim">NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" id="exampleInputNim" placeholder="Masukkan NIM anda">
                    <div class="text-danger">
                        @error('nim')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputFile">File KTP</label>
                    <input type="file" name="file_ktp" class="form-control" id="exampleInputFile">
                    <div class="text-danger">
                        @error('file_ktp')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File KK</label>
                    <input type="file" name="file_kk" class="form-control" id="exampleInputFile">
                    <div class="text-danger">
                        @error('file_kk')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File KTM</label>
                    <input type="file" name="file_ktm" class="form-control" id="exampleInputFile">
                    <div class="text-danger">
                        @error('file_ktm')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File SKD</label>
                    <input type="file" name="file_skd" class="form-control" id="exampleInputFile">
                    <div class="text-danger">
                        @error('file_skd')
                                  {{ $message }}
                        @enderror
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
@endsection

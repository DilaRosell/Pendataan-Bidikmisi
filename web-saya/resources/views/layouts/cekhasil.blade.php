@extends('layouts.t_cekhasil')

@section ('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Lengkap</th>
                      <th>NIM</th>
                      <th>File KTP</th>
                      <th>File KK</th>
                      <th>File KTM</th>
                      <th>File SKD</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $id=1; ?>
                    @foreach ($cekhasil as $data)
                      <tr>
                            <td>{{ $id++ }}</td>
                            <td>{{ $data->nama_mhs }}</td>
                            <td>{{ $data->nim }}</td>
                            <td><img src="{{ url('foto_ktp/'.$data->file_ktp) }}" widht="30px"></td>
                            <td><img src="{{ url('foto_kk/'.$data->file_kk) }}" widht="30px"></td>
                            <td><img src="{{ url('foto_ktm/'.$data->file_ktm) }}" widht="30px"></td>
                            <td><img src="{{ url('foto_skd/'.$data->file_skd) }}" widht="30px"></td>
                            <td>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                                Delete
                              </button>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            
      
      @foreach ($cekhasil as $data)
      <div class="modal fade" id="delete{{ $data->id }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->nama_mhs }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin menghapus Data Ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <a href="/cekhasil/delete/{{ $data->id }}" class="btn btn-outline-light">Yes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

@endsection

@extends('layouts.t_profil')

@section ('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputname1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnim1">NIM</label>
                    <input type="text" class="form-control" id="exampleInputnim1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputprodi1">Prodi</label>
                    <input type="text" class="form-control" id="exampleInputprodi1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputaddress1">Alamat</label>
                    <input type="address" class="form-control" id="exampleInputaddress1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnohp1">No HP</label>
                    <input type="text" class="form-control" id="exampleInputnohp1" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection
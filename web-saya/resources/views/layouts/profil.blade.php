@extends('layouts.t_profil')

@section ('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->picture }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->level }}</p>

                <a href="#" class="btn btn-primary btn-block"><b>Change Picture</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ubah_password" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" active tab-pane" id="personal_info">
                    <form class="form-horizontal"> 
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama" placeholder="nama anda" value="{{ Auth::user()->name }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nim" placeholder="nim anda" value="{{ Auth::user()->nim }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputProdi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="prodi" placeholder="program studi anda" value="{{ Auth::user()->prodi }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="email anda" value="{{ Auth::user()->email }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNohp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="no_hp" placeholder="nomor aktif anda" value="{{ Auth::user()->no_hp }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="ubah_password">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="currentps" placeholder="Kata sandi saat ini">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="newps" placeholder="Kata sandi baru">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="cnewps" placeholder="Konfirmasi kata sandi baru">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
@endsection
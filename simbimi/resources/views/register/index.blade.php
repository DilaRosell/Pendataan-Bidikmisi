@section('js')
    <script type="text/javascript">
        
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('submit').disabled = false;
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Sandi Cocok';
  } else {
    document.getElementById('submit').disabled = true;
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Sandi Tidak Cocok';
  }
}
    </script>
@stop


@extends('layouts.main')

@section('container')

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5">

			@if(Session::has('berhasil'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                    {{ Session::get('berhasil') }}
                </div>
                @endif
 
                @if(Session::has('gagal'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                    {{ Session::get('gagal') }}
                </div>
                @endif
			
			<form role="form" method="post" action="{{ url('registermhs') }}" enctype="multipart/form-data">
				@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Peserta</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Peserta" name="nama" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NIM</label>
                  <input type="text" name="nim" class="form-control" id="exampleInputPassword1" placeholder="NIM" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Photo Peserta</label>
                  <input type="file" name="photo" class="form-control" id="exampleInputFile" required>
                </div>
                
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
              <p class="mt-5 mb-3 text-muted">Copyright &copy; 2021 SIMBIMI</p>
            </form>

		</div>
	</div>
</div>

@endsection
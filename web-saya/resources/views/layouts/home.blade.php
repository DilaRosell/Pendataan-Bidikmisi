@extends('layouts.template')
@section('dashboard', 'active')
@section ('content')
        <!-- Small boxes (Stat box) -->
						<!-- start: BASIC EXAMPLE -->
            <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Profil Saya</h2>
											
											<p class="links cl-effect-1">
												<a href="/profil">
													Update Profile
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Pendafataran Saya</h2>
										
											<p class="cl-effect-1">
												<a href="/cekhasil">
													Lihat Catatan Pendaftaran Saya
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Menu Pendaftaran</h2>
											
											<p class="links cl-effect-1">
												<a href="/daftar">
													Daftar
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
			
        <!-- /.row -->

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
        <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->

@endsection
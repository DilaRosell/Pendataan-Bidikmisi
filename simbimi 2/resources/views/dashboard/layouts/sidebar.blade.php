<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        

        <li class="menu-sidebar"><a href="{{ url('/dashboard') }}"><span class="fa fa-tachometer"></span> Beranda Dashboard</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/biodata') }}"><span class="fa fa-address-card-o"></span> Biodata</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="fa fa-envelope-open-o"></span> Kirim Pesan</span></a></li>

        @if(\Auth::user()->role == 1)
        <li class="menu-sidebar"><a href="{{ url('/verifikasi') }}"><span class="fa fa-check-square-o"></span> Verifikasi</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/peserta') }}"><span class="fa fa-list-alt"></span> Data Peserta</span></a></li>

    
        @endif

        <li class="header">OTHER</li>

        @if(\Auth::user()->name == 'Admin')
        <li class="menu-sidebar"><a href="{{ url('/reset-password') }}"><span class="fa fa-repeat"></span> Reset Password</span></a></li>
        @endif

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>
    
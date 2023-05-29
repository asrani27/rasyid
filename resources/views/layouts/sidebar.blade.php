
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/pendidikan*')) ? 'active' : '' }}"><a href="/superadmin/pendidikan"><i class="fa fa-th"></i> <span>Data Pendidikan</span></a></li>
    <li class="{{ (request()->is('superadmin/desa*')) ? 'active' : '' }}"><a href="/superadmin/desa"><i class="fa fa-th"></i> <span>Data Desa</span></a></li>
    <li class="{{ (request()->is('superadmin/pengajuan*')) ? 'active' : '' }}"><a href="/superadmin/pengajuan"><i class="fa fa-th"></i> <span>Data Jenis Pengajuan</span></a></li>
    <li class="{{ (request()->is('superadmin/agama*')) ? 'active' : '' }}"><a href="/superadmin/agama"><i class="fa fa-th"></i> <span>Data Agama</span></a></li>

    <li class="header">DATA TRANSAKSI</li>
    <li class="{{ (request()->is('superadmin/penduduk*')) ? 'active' : '' }}"><a href="/superadmin/penduduk"><i class="fa fa-th"></i> <span>Data Penduduk</span></a></li>
    <li class="{{ (request()->is('superadmin/nikah*')) ? 'active' : '' }}"><a href="/superadmin/nikah"><i class="fa fa-th"></i> <span>Data Nikah</span></a></li>
    <li class="{{ (request()->is('superadmin/lahir*')) ? 'active' : '' }}"><a href="/superadmin/lahir"><i class="fa fa-th"></i> <span>Data Kelahiran</span></a></li>
    <li class="{{ (request()->is('superadmin/mati*')) ? 'active' : '' }}"><a href="/superadmin/mati"><i class="fa fa-th"></i> <span>Data Kematian</span></a></li>
    <li class="{{ (request()->is('superadmin/usaha*')) ? 'active' : '' }}"><a href="/superadmin/usaha"><i class="fa fa-th"></i> <span>Data Ijin Usaha</span></a></li>
    
    <li class="header">DATA LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-th"></i> <span>Laporan</span></a></li>
    <li class="header">SETTING</li>
    <li class="{{ (request()->is('superadmin/gp*')) ? 'active' : '' }}"><a href="/superadmin/gp"><i class="fa fa-key"></i> <span>Ganti Pass</span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    @else
        
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('pemohon/profil*')) ? 'active' : '' }}"><a href="/pemohon/profil"><i class="fa fa-user"></i> <span>Profil</span></a></li>
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>
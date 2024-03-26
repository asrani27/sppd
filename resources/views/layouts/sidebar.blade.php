
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/jabatan*')) ? 'active' : '' }}"><a href="/superadmin/jabatan"><i class="fa fa-arrow-right"></i> <span><i>Jabatan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/pegawai*')) ? 'active' : '' }}"><a href="/superadmin/pegawai"><i class="fa fa-arrow-right"></i> <span><i>Pegawai</i></span></a></li>
    <li class="header">TRANSAKSI</li>
    <li class="{{ (request()->is('superadmin/sppd*')) ? 'active' : '' }}"><a href="/superadmin/sppd"><i class="fa fa-arrow-right"></i> <span><i>SPPD</i></span></a></li>
    <li class="{{ (request()->is('superadmin/rincian*')) ? 'active' : '' }}"><a href="/superadmin/rincian"><i class="fa fa-arrow-right"></i> <span><i>Rincian SPPD</i></span></a></li>
    <li class="{{ (request()->is('superadmin/pembayaran*')) ? 'active' : '' }}"><a href="/superadmin/pembayaran"><i class="fa fa-arrow-right"></i> <span><i>Pembayaran SPPD</i></span></a></li>
    <li class="header">LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-arrow-right"></i> <span><i>Laporan</i></span></a></li>
    <li class="header">SETTING</li>
    
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
   
    
    </ul>
    <!-- /.sidebar-menu -->
</section>
@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <a href="/superadmin/laporan/pegawai" target="_blank" class="btn btn-sm btn-danger">LAP. PEGAWAI/PEMOHON</a>
            <a href="/superadmin/laporan/jabatan" target="_blank" class="btn btn-sm btn-danger">LAP. JABATAN</a>
            <a href="/superadmin/laporan/bulanan" target="_blank" class="btn btn-sm btn-danger">LAP. PENGELUARAN SPPD</a>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header">
          <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan Per Periode</h3>

          <div class="box-tools">
            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <form method="post" action="/superadmin/laporan/periode" target="_blank">
            @csrf
          Mulai
          <input type="date" name="mulai">
          Sampai
          <input type="date" name="sampai">
          Laporan
          <select name="jenis" required>
            <option value="">-pilih-</option>
            <option value="keuangan">Keuangan SPPD Pegawai</option>
            
          </select>
          &nbsp;
          &nbsp;
          &nbsp;
          <button type="submit" class="btn btn-xs btn-danger">Print</button>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      
      <!-- /.box -->
    </div>
</div>
@endsection
@push('js')

@endpush

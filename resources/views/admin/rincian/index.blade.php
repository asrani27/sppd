@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Rincian SPPD</h3>
    
              <div class="box-tools">

                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal SPPD</th>
                  <th>Nomor SPPD</th>
                  <th>Nama Yg Berangkat</th>
                  <th>Uang Transport</th>
                  <th>Uang Penginapan</th>
                  <th>Uang Harian</th>
                  <th>Total</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->sppd->tanggal)->format('d-m-Y')}}</td>
                    <td>{{$item->sppd->nomor_surat}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{number_format($item->uang_transport)}}</td>
                    <td>{{number_format($item->uang_penginapan)}}</td>
                    <td>{{number_format($item->uang_harian)}}</td>
                    <td>{{number_format($item->uang_harian + $item->uang_transport + $item->uang_penginapan)}}</td>
                    
                    <td>
                      <a href="/superadmin/rincian/print/{{$item->id}}" class="btn btn-xs  btn-danger"><i class="fa fa-print"></i> Cetak</a>
                      <a href="/superadmin/rincian/edit/{{$item->id}}" class="btn btn-xs  btn-primary"><i class="fa fa-money"></i> Rincian</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          {{$data->links()}}
        </div>
    </div>
</section>


@endsection
@push('js')

@endpush


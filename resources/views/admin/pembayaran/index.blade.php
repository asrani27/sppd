@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Pembayaran SPPD</h3>
    
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
                  <th>Penerima</th>
                  <th>Detail</th>
                  <th>Nomor Bukti Pembayaran</th>
                  <th>Tanggal Di Bayar</th>
                  <th>NIP bendahara</th>
                  <th>Nama Bendahara</th>
                  <th>Di transfer ke</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->sppd->tanggal)->format('d-m-Y')}}</td>
                    <td>{{$item->sppd->nomor_surat}}</td>
                    <td>{{$item->nama}}</td>
                    <td>
                      
                    Transport : {{number_format($item->uang_transport)}}<br/>
                    Penginapan : {{number_format($item->uang_penginapan)}}<br/>
                    Uang Saku : {{number_format($item->uang_harian)}}<br/>
                    Total : {{number_format($item->uang_harian + $item->uang_transport + $item->uang_penginapan)}}
                    </td>
                    <td>{{$item->nomor_bukti}}</td>
                    <td>
                      @if ($item->tanggal_bayar != null)
                      {{\Carbon\Carbon::parse($item->tanggal_bayar)->format('d-m-Y')}}
                      @endif
                    </td>
                    <td>{{$item->nip_bendahara}}</td>
                    <td>{{$item->nama_bendahara}}</td>
                    <td>{{$item->transfer_ke}}</td>
                    <td>
                      <a href="/superadmin/pembayaran/print/{{$item->id}}" class="btn btn-xs  btn-danger"><i class="fa fa-print"></i> Cetak</a>
                      <a href="/superadmin/pembayaran/edit/{{$item->id}}" class="btn btn-xs  btn-primary"><i class="fa fa-money"></i> bayar</a>
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


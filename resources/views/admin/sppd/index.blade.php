@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data SPPD</h3>
    
              <div class="box-tools">
                <a href="/superadmin/sppd/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>Nomor</th>
                  <th>Pejabat</th>
                  <th>Pegawai Yg Berangkat</th>
                  <th>Maksud Perjalanan</th>
                  <th>Tujuan</th>
                  <th>Mata Anggaran</th>
                  <th>Tanggal Berangkat</th>
                  <th>Tanggal Kembali</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                    <td>{{$item->nomor_surat}}</td>
                    <td>{{$item->pejabat}}</td>
                    <td>
                      <ul>
                      @if (count($item->pengikut) != 0)
                        @foreach ($item->pengikut as $item2)
                            <li>{{$item2->nama}}</li>
                        @endforeach
                      @endif
                      </ul>
                    </td>
                    <td>{{$item->maksud}}</td>
                    <td>{{$item->tujuan}}</td>
                    <td>{{$item->mata_anggaran}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal_berangkat)->format('d-m-Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal_kembali)->format('d-m-Y')}}</td>
                    <td>
                      <a href="/superadmin/sppd/pengikut/{{$item->id}}" class="btn btn-xs  btn-primary"><i class="fa fa-users"></i> Yg Berangkat</a>
                        <a href="/superadmin/sppd/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/sppd/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
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


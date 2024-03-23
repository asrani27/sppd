@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data karyawan</h3>
    
              <div class="box-tools">
                <a href="/superadmin/karyawan/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah karyawan</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Telp</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->jabatan == null ? '': $item->jabatan->nama}}</td>
                    <td>
                        <a href="/superadmin/karyawan/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/karyawan/delete/{{$item->id}}"
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


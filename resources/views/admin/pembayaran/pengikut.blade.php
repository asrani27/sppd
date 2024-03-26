@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i>Pegawai/Pengikut Yang berangkat </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/sppd/pengikut/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pegawai</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="pegawai_id" required>
                        <option value="">-pilih-</option>
                        @foreach ($pegawai as $item)
                            <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Tambahkan</button>
                      <a href="/superadmin/sppd" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                  </div>
              </div>
            </form>
          </div>
    </div>
   </div>
    
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th></th>
                </tr>
                @foreach ($data->pengikut as $key=> $item)
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$item->nip}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->jabatan}}</td>
                  <td>
                    <a href="/superadmin/sppd/deletepengikut/{{$item->id}}"
                      onclick="return confirm('Yakin ingin di hapus');"
                      class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
        </div>
    </div>
   </div>
</section>


@endsection
@push('js')

<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
  
      return false;
    return true;
  }
  </script>
@endpush


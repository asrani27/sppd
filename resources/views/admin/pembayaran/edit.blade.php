@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Pembayaran </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/pembayaran/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" readonly value="{{$data->nip}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" readonly value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" readonly value="{{$data->jabatan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Uang Transport</label>
                    <div class="col-sm-10">
                      <input type="text" name="uang_transport" class="form-control" readonly value="{{$data->uang_transport}}" onkeypress="return hanyaAngka(event)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Uang Penginapan</label>
                    <div class="col-sm-10">
                      <input type="text" name="uang_penginapan" class="form-control" readonly value="{{$data->uang_penginapan}}" onkeypress="return hanyaAngka(event)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Uang Harian</label>
                    <div class="col-sm-10">
                      <input type="text" name="uang_harian" class="form-control" readonly value="{{$data->uang_harian}}" onkeypress="return hanyaAngka(event)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Bukti Pembayaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nomor_bukti" value="{{$data->nomor_bukti}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pembayaran</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal_bayar" value="{{$data->tanggal_bayar}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIP bendahara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nip_bendahara" value="{{$data->nip_bendahara}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama bendahara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_bendahara" value="{{$data->nama_bendahara}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Transfer Ke</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="transfer_ke" value="{{$data->transfer_ke}}" placeholder="Nama Bank + No rek">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Simpan</button>
                      <a href="/superadmin/pembayaran" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                  </div>
              </div>
            </form>
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


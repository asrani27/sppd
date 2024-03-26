@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/sppd/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" required  value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Surat</label>
                    <div class="col-sm-10">
                      <input type="text" name="nomor_surat" class="form-control" required value="{{$data->nomor_surat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Surat</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode_surat" class="form-control" required value="{{$data->kode_surat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pejabat Pembuat Komitmen</label>
                    <div class="col-sm-10">
                      <input type="text" name="pejabat" class="form-control" required value="{{$data->pejabat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Maksud</label>
                    <div class="col-sm-10">
                      <input type="text" name="maksud" class="form-control" required value="{{$data->maksud}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tujuan</label>
                    <div class="col-sm-10">
                      <input type="text" name="tujuan" class="form-control" required value="{{$data->tujuan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mata Anggaran</label>
                    <div class="col-sm-10">
                      <input type="text" name="mata_anggaran" class="form-control" required value="{{$data->mata_anggaran}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Berangkat</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_berangkat" class="form-control" required  value="{{$data->tanggal_berangkat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Kembali</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_kembali" class="form-control" required  value="{{$data->tanggal_kembali}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/sppd" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


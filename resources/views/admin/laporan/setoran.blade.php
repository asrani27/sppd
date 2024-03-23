<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right">
                <img src="/bpr.png" width="50%">
            </td>
            <td style="text-align: center">
                <b>BPR Multidhana Bersama<br/></b>
                Alamat: Jl. A Yani Km 9A Kelurahan Mandarsari, Kecamatan Kertak Hanyar, Banjarmasin.
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN SETORAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor Deposito</th>
            <th>Nasabah</th>
            <th>Jumlah Setoran</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
                <td style="text-align: center">{{$item->deposito == null ? '': $item->deposito->nomor}}</td>
                <td style="text-align: center">{{$item->nasabah == null ? '' :$item->nasabah->nama}}</td>
                <td style="text-align: center">{{number_format($item->nominal)}}</td>
              
                
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Banjarmasin, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Kepala Bank,
                <br/><br/><br/><br/><br/>


                <b><u>Syamsudin</u></b><br/>
                NIP. 19278979274981273

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>
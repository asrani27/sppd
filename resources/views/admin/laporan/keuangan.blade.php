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
                <img src="/logo.png" width="50%">
            </td>
            <td style="text-align: center">
                <b>DINAS PENDIDIKAN BARITO KUALA<br/></b>
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN KEUANGAN SPPD PEGAWAI</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>No SPPD</th>
            <th>Nama Pegawai</th>
            <th>Jumlah</th>
            <th>Tujuan</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{$item->sppd->nomor_surat}}</td>
                <td style="text-align: center">{{$item->nama}}</td>
                <td style="text-align: center">{{number_format($item->uang_transport + $item->uang_penginapan + $item->uang_harian)}}</td>
                <td style="text-align: center">{{$item->sppd->tujuan}}</td>
                
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Barito Kuala, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Bendahara,
                <br/><br/><br/><br/><br/>


                <b><u>Rahman</u></b><br/>
                NIP: 4564322
                

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
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
            <td style="text-align: center;" >
                <b>DINAS PENDIDIKAN BARITO KUALA<br/></b>
            </td>
            <td width="15%" style="text-align: left">
                Nomor : {{$data->sppd->nomor_surat}}<br/>
                Tanggal : {{\Carbon\Carbon::parse($data->sppd->tanggal)->format('d-M-Y')}}
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>RINCIAN BIAYA SPPD</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="10" width="100%">
        <tr>
            <th>No</th>
            <th>Rincian</th>
            <th>Jumlah</th>
        </tr>
        
        <tr>
            <td style="text-align: center">1</td>
            <td>Uang Transport</td>
            <td>{{number_format($data->uang_transport)}}</td>
        </tr>
        <tr>
            <td style="text-align: center">2</td>
            <td>Uang Penginapan</td>
            <td>{{number_format($data->uang_penginapan)}}</td>
        </tr>
        <tr>
            <td style="text-align: center">3</td>
            <td>Uang Harian</td>
            <td>{{number_format($data->uang_harian)}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Jumlah</td>
            <td>{{number_format($data->uang_harian+$data->uang_penginapan+$data->uang_transport)}}</td>
        </tr>
        <tr>
            <td colspan=3>Terbilang : {{terbilang($data->uang_harian+$data->uang_penginapan+$data->uang_transport)}}</td>
        </tr>
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%" style="text-align: center">

                Bendahara Pengeluaran, <br/>
            
                Dinas Pendidikan Barito Kuala,
                <br/><br/><br/><br/><br/>


                <b><u>{{$data->nama_bendahara}}</u></b><br/>
                NIP: {{$data->nip_bendahara}}
            </td>
            <td style="text-align: center">
                Barito Kuala, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Penerima,
                <br/><br/><br/><br/><br/>


                <b><u>{{$data->nama}}</u></b><br/>
                NIP: {{$data->nip}}
                

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
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
                Nomor Bukti : {{$data->nomor_bukti}}<br/>
                Tahun Anggaran : {{$data->tahun_anggaran}}
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>KWITANSI/BUKTI PEMBAYARAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="10" width="100%">
        
        
        <tr>
            <td style="text-align: center">1</td>
            <td>Diterima Dari</td>
            <td>Dinas Pendidikan Barito Kuala</td>
        </tr>
        <tr>
            <td style="text-align: center">2</td>
            <td>Dibayarkan Kepada</td>
            <td>{{$data->nama}} , NIP : {{$data->nip}}</td>
        </tr>
        <tr>
            <td style="text-align: center">3</td>
            <td>Jumlah</td>
            <td>{{number_format($data->uang_harian+$data->uang_penginapan+$data->uang_transport)}}</td>
        </tr>
        <tr>
            <td style="text-align: center">4</td>
            <td>Terbilang</td>
            <td>{{terbilang($data->uang_harian+$data->uang_penginapan+$data->uang_transport)}}</td>
        </tr>
        <tr>
            <td style="text-align: center">5</td>
            <td>Untuk Pembayaran</td>
            <td>Uang Transportasi, uang penginapan dan uang harian</td>
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
    </table> <table width="100%">
        <tr>
            <td width="100%" style="text-align: center">

                Pejabat Pembuat Komitmen, <br/>
            
                Dinas Pendidikan Barito Kuala,
                <br/><br/><br/><br/><br/>


                <b><u>{{$data->sppd->pejabat}}</u></b><br/>
                NIP: {{$data->sppd->nip_pejabat}}
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
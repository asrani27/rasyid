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
                <img src="/logo/artilogo.png" width="60%">
            </td>
            <td style="text-align: center">
                <b>APLIKASI PELAYANAN DESA CEPAT TERPADU<br/>
                DESA NARAHAN<br/></b>
                Kabupaten Kapuas Kalimantan Tengah

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN DATA KEMATIAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Pelapor</th>
            <th>Nama Yang Meninggal</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Meninggal</th>
            <th>Penyebab</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{$item->pelapor}}</td>
                <td style="text-align: center">{{$item->nama_meninggal}}</td>
                <td style="text-align: center">{{$item->jkel}}</td>
                <td style="text-align: center">{{$item->tanggal_meninggal}}</td>
                <td style="text-align: center">{{$item->penyebab}}</td>
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="70%"></td>
            <td>
                Desa Narahan, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                <br/><br/><br/><br/><br/>


                Kepala Desa

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
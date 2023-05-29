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
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN DATA NIKAH</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Nik Pelapor</th>
            <th>Nama Pelapor</th>
            <th>Nik Pria</th>
            <th>Nama Pria</th>
            <th>Nik Wanita</th>
            <th>Nama Wanita</th>
            <th>Tanggal Menikah</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{$item->nik_pelapor}}</td>
                <td style="text-align: center">{{$item->nama_pelapor}}</td>
                <td style="text-align: center">{{$item->nik_pria}}</td>
                <td style="text-align: center">{{$item->nama_pria}}</td>
                <td style="text-align: center">{{$item->nik_wanita}}</td>
                <td style="text-align: center">{{$item->nama_wanita}}</td>
                <td style="text-align: center">{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
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
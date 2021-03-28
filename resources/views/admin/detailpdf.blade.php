<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Detail Laporan Masyarakat</title>
</head>
<body>
    <center>
        <h2>Detail Laporan pengaduan</h2>
        <br>
        <hr>
    </center>
        <h4>Dilaporkan Pada Tanggal: {{ $data_pengaduan->tanggal_pengaduan  }}   </h4>
        <h4>Laporan : {{ $data_pengaduan->isi_laporan }}</h4>
        <h4>Bukti Foto:</h4>
        <h4>{{ $data_pengaduan->foto }}</h4>
        <br>
        <hr>
        <h3>Tanggapan Yang diberikan:</h3>
        <h4>{{ @$data_tanggapan->tanggapan }}</h4>
        {{-- <h3>{{ $data_tanggapan->tanggapan }}</h3> --}}




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Laporan Pengaduan Masyarakat </title>
</head>

<body>
    <center>
    <h2>Laporan Pengaduan Masyarakat</h2>
    <table border="1" cellpadding=15 cellspacing=0 >
        <thead>
            <tr class="text-center">
                <th>NO</th>
                <th>Tanggal Pengaduan</th>
                <th>Nik</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Status Laporan</th>

            </tr>
        </thead>

        <tbody>
            @foreach($data_pengaduan as $pengaduan)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                            <td>{{ $pengaduan->nik }}</td>
                            <td>{{\Str::limit( $pengaduan->isi_laporan,30) }}</td>
                            <td><img src="/img/{{ $pengaduan->foto }}"></td>

                            <td>{{ $pengaduan->status }}</td> --}}
                        </tr>

                        @endforeach


        </tbody>
    </table>
</center>
</body>
</html>

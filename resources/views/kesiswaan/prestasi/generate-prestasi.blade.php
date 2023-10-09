<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Prestasi</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Peserta</th>
                <th scope="col">Status</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Penyelenggara</th>
                <th scope="col">Hasil</th>
                <th scope="col">Tingkat</th>
                <th scope="col">Pembina</th>
                <th scope="col">deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prestasis as $i => $prestasi)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $prestasi->nama_peserta }}</td>
                    <td>{{ $prestasi->status }}</td>
                    <td>{{ $prestasi->tanggal }}</td>
                    <td>{{ $prestasi->nama_kegiatan }}</td>
                    <td>{{ $prestasi->penyelenggara }}</td>
                    <td>{{ $prestasi->hasil }}</td>
                    <td>{{ $prestasi->tingkat }}</td>
                    <td>{{ $prestasi->pembina }}</td>
                    <td>{!! $prestasi->deskripsi !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

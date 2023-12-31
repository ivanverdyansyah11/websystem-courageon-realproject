<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Pembinaan Siswa</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Masalah</th>
                <th scope="col">Solusi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembinaans as $i => $pembinaan)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $pembinaan->student->nama_lengkap }}</td>
                    <td>{{ $pembinaan->tanggal }}</td>
                    <td>{!! $pembinaan->masalah !!}</td>
                    <td>{!! $pembinaan->solusi !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

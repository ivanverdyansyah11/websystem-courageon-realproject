<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Beasiswa</h2>

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
                <th scope="col">Nama Beasiswa</th>
                <th scope="col">Tahun</th>
                <th scope="col">Jumlah Beasiswa</th>
                <th scope="col">Digunakan Untuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beasiswas as $i => $beasiswa)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $beasiswa->student->nama_lengkap }}</td>
                    <td>{{ $beasiswa->beasiswa->title }}</td>
                    <td>{{ $beasiswa->tahun }}</td>
                    <td>{{ $beasiswa->jumlah_beasiswa }}</td>
                    <td>{{ $beasiswa->digunakan_untuk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

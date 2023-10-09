<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Kelulusan Siswa</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Index</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelulusans as $i => $kelulusan)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $kelulusan->student->nama_lengkap }}</td>
                    <td>{{ $kelulusan->jurusan->name }}</td>
                    <td>{{ $kelulusan->kelas->name }}</td>
                    <td>{{ $kelulusan->index->name }}</td>
                    <td>{{ $kelulusan->semesters->semester }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

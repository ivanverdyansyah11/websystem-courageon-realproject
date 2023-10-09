<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat | Data Siswa</title>

</head>

<body>

    <h2>Data Siswa Kelas {{ $students[0]->kelas->name }}</h2>

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
                <th scope="col">NIS</th>
                <th scope="col">NISN</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tahun Ajaran</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Index</th>
                <th scope="col">Semester</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelurahan</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $i => $student)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $student->nama_lengkap }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nisn }}</td>
                    <td>{{ $student->kelas->name }}</td>
                    <td>{{ $student->tahun_ajaran->tahun }}</td>
                    <td>{{ $student->jurusan->name }}</td>
                    <td>{{ $student->index->name }}</td>
                    <td>{{ $student->semesters->semester }}</td>
                    <td>{{ $student->tahun_masuk }}</td>
                    <td>{{ $student->tempat_lahir }}</td>
                    <td>{{ $student->tanggal_lahir }}</td>
                    @if ($student->jenis_kelamin == 'L')
                        <td>Laki-Laki</td>
                    @elseif($student->jenis_kelamin == 'P')
                        <td>Perempuan</td>
                    @endif
                    <td>{{ $student->kelurahan }}</td>
                    <td>{{ $student->kecamatan }}</td>
                    <td>{{ $student->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

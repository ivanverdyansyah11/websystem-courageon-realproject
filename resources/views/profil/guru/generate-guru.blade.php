<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Guru</h2>

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
                <th scope="col">NIP</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Pangkat/ Golongan</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Status</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Pangkat Tertinggi</th>
                <th scope="col">Golongan Ruang</th>
                <th scope="col">TMT</th>
                <th scope="col">Nomor SKP Terakhir</th>
                <th scope="col">Tanggal SKP Terakhir</th>
                <th scope="col">Masa Kerja</th>
                <th scope="col">Tanggal SKP Pertama</th>
                <th scope="col">Nomor SKP Pertama</th>
                <th scope="col">Kenaikan Gaji Berkala</th>
                <th scope="col">Nomor Kartu Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $i => $guru)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $guru->fullname }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->place_of_birth }}</td>
                    <td>{{ $guru->date_of_birth }}</td>
                    <td>{{ $guru->rank }}</td>
                    <td>{{ $guru->position }}</td>
                    @if ($guru->gender == 'L')
                        <td>Laki-Laki</td>
                    @elseif($guru->gender == 'P')
                        <td>Perempuan</td>
                    @endif
                    <td>{{ $guru->status }}</td>
                    <td>{{ $guru->course->name }}</td>
                    <td>{{ $guru->highest_rank }}</td>
                    <td>{{ $guru->room_type }}</td>
                    <td>{{ $guru->tmt }}</td>
                    <td>{{ $guru->last_number_skp }}</td>
                    <td>{{ $guru->last_date_skp }}</td>
                    <td>{{ $guru->work_tenure }}</td>
                    <td>{{ $guru->first_number_skp }}</td>
                    <td>{{ $guru->first_date_skp }}</td>
                    <td>{{ $guru->salary_increase }}</td>
                    <td>{{ $guru->employee_card_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

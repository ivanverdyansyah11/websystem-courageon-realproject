<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Pegawai</h2>

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
            @foreach ($pegawais as $i => $pegawai)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $pegawai->fullname }}</td>
                    <td>{{ $pegawai->nip }}</td>
                    <td>{{ $pegawai->place_of_birth }}</td>
                    <td>{{ $pegawai->date_of_birth }}</td>
                    <td>{{ $pegawai->rank }}</td>
                    <td>{{ $pegawai->position }}</td>
                    @if ($pegawai->gender == 'L')
                        <td>Laki-Laki</td>
                    @elseif($pegawai->gender == 'P')
                        <td>Perempuan</td>
                    @endif
                    <td>{{ $pegawai->status }}</td>
                    <td>{{ $pegawai->highest_rank }}</td>
                    <td>{{ $pegawai->room_type }}</td>
                    <td>{{ $pegawai->tmt }}</td>
                    <td>{{ $pegawai->last_number_skp }}</td>
                    <td>{{ $pegawai->last_date_skp }}</td>
                    <td>{{ $pegawai->work_tenure }}</td>
                    <td>{{ $pegawai->first_number_skp }}</td>
                    <td>{{ $pegawai->first_date_skp }}</td>
                    <td>{{ $pegawai->salary_increase }}</td>
                    <td>{{ $pegawai->employee_card_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Manajemen</h2>

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
            @foreach ($manajemens as $i => $manajemen)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $manajemen->fullname }}</td>
                    <td>{{ $manajemen->nip }}</td>
                    <td>{{ $manajemen->place_of_birth }}</td>
                    <td>{{ $manajemen->date_of_birth }}</td>
                    <td>{{ $manajemen->position }}</td>
                    @if ($manajemen->gender == 'L')
                        <td>Laki-Laki</td>
                    @elseif($manajemen->gender == 'P')
                        <td>Perempuan</td>
                    @endif
                    <td>{{ $manajemen->status }}</td>
                    <td>{{ $manajemen->highest_rank }}</td>
                    <td>{{ $manajemen->room_type }}</td>
                    <td>{{ $manajemen->tmt }}</td>
                    <td>{{ $manajemen->last_number_skp }}</td>
                    <td>{{ $manajemen->last_date_skp }}</td>
                    <td>{{ $manajemen->work_tenure }}</td>
                    <td>{{ $manajemen->first_number_skp }}</td>
                    <td>{{ $manajemen->first_date_skp }}</td>
                    <td>{{ $manajemen->salary_increase }}</td>
                    <td>{{ $manajemen->employee_card_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

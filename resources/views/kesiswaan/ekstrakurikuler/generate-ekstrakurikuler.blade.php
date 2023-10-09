<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Ekstrakurikuler</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Ekstrakurikuler</th>
                <th scope="col">Tema</th>
                <th scope="col">Hari Ekstra</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Berakhir</th>
                <th scope="col">Pembina</th>
                <th scope="col">Nomor Pembina</th>
                <th scope="col">Link Pendaftaran</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekstrakurikulers as $i => $ekstrakurikuler)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $ekstrakurikuler->name }}</td>
                    <td>{{ $ekstrakurikuler->title }}</td>
                    <td>{{ $ekstrakurikuler->schedule_day }}</td>
                    <td>{{ $ekstrakurikuler->start_time }}</td>
                    <td>{{ $ekstrakurikuler->end_time }}</td>
                    <td>{{ $ekstrakurikuler->coach }}</td>
                    <td>{{ $ekstrakurikuler->number_phone_coach }}</td>
                    <td>{{ $ekstrakurikuler->link_register }}</td>
                    <td>{{ $ekstrakurikuler->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Majalah</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($majalahs as $i => $majalah)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $majalah->title }}</td>
                    <td>{{ $majalah->author }}</td>
                    <td>{{ $majalah->created_date }}</td>
                    <td>{!! $majalah->description !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

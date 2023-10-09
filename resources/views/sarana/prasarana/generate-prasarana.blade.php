<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Prasarana</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prasaranas as $i => $prasarana)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $prasarana->name }}</td>
                    <td>{{ $prasarana->total }}</td>
                    <td>{!! $prasarana->description !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

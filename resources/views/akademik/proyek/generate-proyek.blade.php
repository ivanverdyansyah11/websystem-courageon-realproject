<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>

</head>

<body>

    <h2>Data Proyek 5P</h2>

    <table class="table">
        <thead>
            <tr></tr>
        </thead>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tema</th>
                <th scope="col">Topik</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyeks as $i => $proyek)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $proyek->title }}</td>
                    <td>{{ $proyek->topic }}</td>
                    <td>{!! $proyek->description !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

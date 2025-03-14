<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lomba Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lomba Poster Information</h1>
        <p>Nama: {{ $data['name'] }}</p>
        <p>Kelas: {{ $data['kelas'] }}</p>
        <p>Judul Poster: {{ $data['judul'] }}</p>
        <p>Foto Poster:</p>
        <img src="{{ asset( 'storage/'. $data['poster_path']) }}" width="200" alt="Poster Photo">
    </div>
</body>
</html>
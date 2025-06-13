<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Data yang Dikirim</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nama:</strong> {{ $nama }}</li>
            <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $gender }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
            <li class="list-group-item"><strong>Nomor Ponsel:</strong> {{ $ponsel }}</li>
        </ul>
        <br>
        <a href="{{ route('biodata') }}" class="btn btn-primary">Kembali ke Form</a>
    </div>
</body>
</html>

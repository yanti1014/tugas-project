@extends('layout.template')
@section('judul','Halaman Biodata')
@section('isi')
    
@endsection
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Halaman Formulir Biodata</h2>
    <form action="\biodata" method="POST">
        @csrf
        Nama : <br>
        <input type="text" name="nama" id=""> <br>
        @error('nama')
        <br> <label style="color: red">($message)</label>
        @enderror
        jenis kelamin : <br>
        <select name="gender" id="">
            <option value="">-- Pilih--</option>
            <option value="Laki-Laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> <br>
        Email : <br>
        <input type="text" name="email" id=""> <br>
        
        Nomor Ponsel : <br>
        <input type="text" name="nomor ponsel" id=""> <br>
        <br>
        <button type="submit">Kirim</button>
    </form>
@endsection
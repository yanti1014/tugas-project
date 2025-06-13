<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    @extends('layout.template')
    @section('judul', 'Halaman Biodata')
    @section('isi')
        <h2 style="text-align: center;">Halaman formulir biodata</h2>
        <form action="/biodata" method="POST">
            @csrf
            Nama : <br>
            <input type="text" name="nama" id="" value = "{{ old('nama') }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            @error('nama')
                <div style="color: white; background-color: red; font-weight: bold; width: 250px; text-align: center; margin-left: 10px; margin-top: 5px; border-radius: 10px">
                    {{ $message }}
                </div>
                <br>
            @enderror
            Jenis Kelamin : <br>
            <select name="gender" id="" class="form-select" aria-label="Default select example">
                <option value="{{ @old('gender') }}">--Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>@error('gender')
                <div style="color: white; background-color: red; font-weight: bold; width: 250px; text-align: center; margin-left: 10px; margin-top: 5px; border-radius: 10px">
                    {{ $message }}
                </div>
                <br>
            @enderror
            Email : <br>
            <input type="text" name="email" id="" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            @error('email')
                <div style="color: white; background-color: red; font-weight: bold; width: 250px; text-align: center; margin-left: 10px; margin-top: 5px; border-radius: 10px">
                    {{ $message }}
                </div>
                <br>
            @enderror
            Nomor Ponsel : <br>
            <input type="text" name="ponsel" class="form-control" placeholder="No. Handphone" aria-label="No. Handphone" aria-describedby="addon-wrapping">
            @error('ponsel')
                <div style="color: white; background-color: red; font-weight: bold; width: 250px; text-align: center; margin-left: 10px; margin-top: 5px; border-radius: 10px">
                    {{ $message }}
                </div>
                <br>
            @enderror
            <br>
            <center><button type="submit" class="btn btn-success" style="margin-bottom: 20px;">Kirim</button></center>
            
        </form>
        <a href="/mahasiswa">Mahasiswa</a>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
</body>

</html>

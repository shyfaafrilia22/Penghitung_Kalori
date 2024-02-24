<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Minuman</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Penghitung Kalori</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="makanan">Daftar Makanan</a></li>
                <li><a href="minuman">Daftar Minuman</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h2>Daftar Minuman</h2>
        <!-- Tabel untuk menampilkan daftar minuman -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Minuman</th>
                    <th>Kalori</th>
                    <th>Deskripsi</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel dengan data makanan -->
@foreach ($minumans as $minuman)
<tr>
    <td>{{ $minuman->id }}</td>
    <td>{{ $minuman->nama }}</td>
    <td>{{ $minuman->kalori }}</td>
    <td>{{ $minuman->deskripsi }}</td>
    <!-- Tambahkan kolom lain sesuai kebutuhan -->
</tr>
@endforeach
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
        <a href="{{ route('tambah_minuman') }}" class="btn btn-primary">Tambah Makanan</a>
    </div>
</body>
</html>

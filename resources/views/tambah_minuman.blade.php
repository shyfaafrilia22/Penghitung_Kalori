<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Minuman</title>
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
        <h2>Tambah Minuman Baru</h2>
        <form method="POST" action="makanan">
            <div class="form-group">
                <label for="nama">Nama Minuman:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="kalori">Kalori:</label>
                <input type="number" class="form-control" id="kalori" name="kalori">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>
</body>
</html>

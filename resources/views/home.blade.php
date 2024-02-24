<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - penghitung kalori</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-12">
            <h2 class="text-center"><b>Penghitung Kalori Makanan dan Minuman</b></h2>
            <hr>
            <p class="text-center">Melacak asupan makanan dan kalori bisa menjadi penting. Apalagi saat ini menghitung kalori pun menjadi sangat mudah karena tersedianya aplikasi penghitung kalori.</p>
            <div class="text-center">
                <a href="{{ route('makanan') }}" class="btn btn-primary">Makanan</a>
                <a href="{{ route('minuman') }}" class="btn btn-primary">Minuman</a>
            </div>
        </div>
    </div>
</body>
</html>

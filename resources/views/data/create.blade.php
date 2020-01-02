<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <h1>Create Data</h1>
    <form action="{{URL::to('/data')}}" method="POST">
        {{ csrf_field() }}
        KTP: <input type="text" name="ktp">
        Nama: <input type="text" name="nama">
        Jenis Kelamin: <input type="text" name="jenis_kelamin">
        Kota: <input type="text" name="kota">
        <input type="submit" value="Add Data">
    </form>
</body>
</html>
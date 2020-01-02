<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{URL::to('/create')}}">Insert</a>
        <a class="navbar-brand" href="{{URL::to('/import')}}">Import</a>
    </nav>
    
    <div class="container">
        <table class="table mt-5">
            <thead>
                <th scope="col">Ktp</td>
                <th scope="col">Nama</td>
                <th scope="col">Jenis Kelamin</td>
                <th scope="col">Kota</td>
                <th scope="col">Delete</td>
            </thead>
            @foreach ($datas as $data)

            <tr>
                <td>{{$data->ktp}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->kota}}</td>
                <td>
                    <a href="{{URL::to('/delete/id', $data->id)}}">
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>

<div class="navcontainer">
    <a href="{{route('perusahaanindex')}}">List perusahaan</a>
    <a href="{{route('addview')}}">add perusahaan</a>
</div>


    <p>{{$data->perusahaan}} Company</p>
    <p>total karyawan:{{$data->karyawans->count()}}</p>

    <form action="{{route('addkaryawan', $data->id )}}" method="POST">
        @csrf
        <input type="text" value="nama" name="nama">
        <input type="text" value="umur" name="umur">
        <input type="text" value="gaji" name="gaji">
        <input type="submit">
    </form>
    
</body>
</html>
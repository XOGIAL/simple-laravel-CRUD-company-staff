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
    <a href="{{route('perusahaanindex')}}">List Perusahaan</a>
    <a href="{{route('addview')}}">add perusahaan</a>
</div>

<form action="{{route('updatekaryawan',$data->id)}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" value="{{$data->namakaryawan}}" name="nama">
    <input type="text" value="{{$data->umur}}" name="umur">
    <input type="text" value="{{$data->gaji}}" name="gaji">
    <input type="submit">
</form>
    
</body>
</html>
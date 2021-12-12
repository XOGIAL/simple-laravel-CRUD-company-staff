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


    <form action="{{route('addperusahaan')}}" method="POST">
        @csrf
        <p>nama perusahaan</p>
        <input type="text" name="name">   
        <input type="submit" value="submit">
    </form>
</body>
</html>
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


<div class="listcontainer">
@foreach($data as $datas)
    <div>
        <div class="datacontainer">
            <p>{{$datas->namakaryawan}}</p>
            <p>{{$datas->umur}}</p>
            <p>{{$datas->gaji}}</p>

            <form action="{{route('deletekaryawan',$datas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">              
            </form>

            <form action="{{route('editkaryawan',$datas->id)}}" method="get">
                <input type="submit" value="edit">
            </form>
        </div>
    </div>
    @endforeach
</div>



    
</body>
</html>
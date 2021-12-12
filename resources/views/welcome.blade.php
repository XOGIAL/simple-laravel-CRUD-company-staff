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
    <a href="">List Perusahaan</a>
    <a href="{{route('addview')}}">add perusahaan</a>
</div>

<div class="listcontainer">

@foreach($data as $datas)
    <div>
        <div class="datacontainer">
             
            <p>{{$datas->perusahaan}}</p>

            <form action="{{route('editperusahaan',$datas->id)}}" method="get">       
            <input type="submit" value="edit">
            </form>

            <form action="{{route('deleteperusahaan',$datas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
            </form>

            <form action="{{route('addkaryawanview',$datas->id)}}" method="get">
                <input type="submit" value="add karyawan">
            </form>

            <form action="{{route('listkaryawan',$datas->id)}}" method="get">
                <input type="submit" value="list Karyawan">
            </form> 
        </div>
        @endforeach   
    </div>
</div>

<form action="{{route('logout')}}" method="post">
    @csrf
<input type="submit" value="logout">

</form>
    
</body>
</html>
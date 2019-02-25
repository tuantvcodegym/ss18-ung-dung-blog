<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Bai Viet</td>
        <td>created_at</td>
        <td>updated_at</td>
    </tr>
    @foreach($blog as $key=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->bai_viet}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td><a href="{{route('edit', $value->id)}}"><button>Sua</button></a></td>
            <td><a href="{{route('destroy', $value->id)}}"><button type="submit" onclick="return confirm('ban co chac muon xoa')">xoa</button></a></td>
        </tr>
    @endforeach
</table>
<a href="{{route('create')}}">Them moi</a>
</body>
</html>
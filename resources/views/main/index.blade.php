@extends('main.layout')

@section('content')
    @foreach ($setting as $set)
        <h4>{{$set->info}}</h4>
         <center><img src="{{$set->cover()}}" alt="" style="width:600px;"></center>
         <br>
         <h5><p>{{$set->bio}}</p></h5>
         <br>
         <h3>Artikel Terbaru!</h3>
         <br>
         <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Creator</th>
            </tr>
            <tbody>
            @foreach ($article as $data)
            <tr>
                <td><a href="/main/{{$data->id}}"><img src="{{$data->thumbnail()}}" style="width: 400px;"></a></td>
                <td><strong>{{$data->title}}</strong></td>
                <td><strong>{{$data->creator->name}}</strong></td>
            </tr>
            @endforeach
            </tbody>
            </thead>
        </table>
        <br>
        <h3>Tentang {{$set->title}}</h3>
        <h5><p>{{$set->about}}</p></h5>
    @endforeach
@endsection
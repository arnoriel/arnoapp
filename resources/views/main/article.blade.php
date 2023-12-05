@extends('main.layout')

@section('content')
<h3>Semua Artikel</h3>
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
@endsection
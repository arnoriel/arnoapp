@extends('layouts.admin')

@section('content')
<h2>Articles</h2>
<br>
<div class="card">
    <div class="card-header">
        <a href="{{ route('article.create') }}" class="btn btn-success"><i class="ti ti-plus"></i> New Article</a>
    </div>
    <div class="card-body">
        <h5>Available Articles</h5>
        <p class="samll-text">Note! Before editing your Article it is better to copy the content section from show article first before start editing.</p>
        <br>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                <th>No</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Creator</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
            <tbody>
            @php $no=1 @endphp
            @foreach ($article as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{$data->thumbnail()}}" style="width: 100px;" alt=""></td>
                <td>{{$data->creator->name}}</td>
                <td>{{$data->date}}</td>
                <td>
                    <form action="{{route('article.destroy',$data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('article.edit',$data->id)}}" class="btn btn-info"><i class="ti ti-pencil"></i> Edit Article</a>
                        <a href="{{route('article.show',$data->id)}}" class="btn btn-warning"><i class="ti ti-eye"></i> Show Article</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="ti ti-trash"></i>Delete Article</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
            </thead>
        </table>


    </div>
@endsection
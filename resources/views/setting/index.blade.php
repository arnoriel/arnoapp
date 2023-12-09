@extends('layouts.admin')

@section('content')
<h2>Site Setting</h2>
<br>
<div class="card">
    <div class="card-header">
        <a href="{{route('setting.create')}}" class="btn btn-success"><i class="ti ti-plus"></i> New Setting (if you haven't made setting yet.)</a>
    </div>
    
    <div class="card-body">
        <h5>Site Customization</h5>
        @foreach ($setting as $data)
        <a href="{{route('setting.edit',$data->id)}}" class="btn btn-info"><i class="ti ti-pencil"></i> Edit Site</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Site Title</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Info</th>
                    <th scope="col">About</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->title}}</td>
                    <td><img src="{{$data->cover()}}" style="width: 100px;" alt=""></td>
                    <td>{{$data->bio}}</td>
                    <td>{{$data->info}}</td>
                    <td>{{$data->about}}</td>
                </tr>
            </tbody>
        </table>    
        @endforeach
</div>
@endsection
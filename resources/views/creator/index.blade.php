@extends('layouts.admin')

@section('content')
    <h2>Creators</h2>
    <br>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('creator.create') }}" class="btn btn-success"><i class="ti ti-plus"></i> New creator</a>
        </div>
        <div class="card-body">
            <h5>Available Creators</h5>
            <br>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                </tr>
                <tbody>
                @php $no=1 @endphp
                @foreach ($creator as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->dob}}</td>
                    <td>
                        <form action="{{route('creator.destroy',$data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('creator.edit',$data->id)}}" class="btn btn-info"><i class="ti ti-pencil"></i> Edit creator</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="ti ti-trash"></i>Delete creator</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </thead>
            </table>


        </div>
    @endsection

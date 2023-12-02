@extends('layouts.admin')

@section('content')
    <h2>Users</h2>
    <br>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('user.create') }}" class="btn btn-success"><i class="ti ti-plus"></i> New User</a>
        </div>
        <div class="card-body">
            <h5>Available Users</h5>
            <br>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <tbody>
                @php $no=1 @endphp
                @foreach ($user as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <form action="{{route('user.destroy',$data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('user.edit',$data->id)}}" class="btn btn-info"><i class="ti ti-pencil"></i> Edit User</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="ti ti-trash"></i>Delete User</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </thead>
            </table>


        </div>
    @endsection

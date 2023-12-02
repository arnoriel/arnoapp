@extends('layouts.admin')

@section('content')
    <div class="card" style="margin: 3%;">
        <div class="card-header bg-success">
            <h5>New Creator</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('creator.update',$creator->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{$creator->name}}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email"  value="{{$creator->email}}" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone"  value="{{$creator->phone}}" class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">dob</label>
                    <input type="date" name="dob" value="{{$creator->dob}}" class="form-control @error('dob') is-invalid @enderror">
                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

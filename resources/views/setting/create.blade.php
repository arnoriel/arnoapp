@extends('layouts.admin')

@section('content')
    <div class="card" style="margin: 3%;">
        <div class="card-header bg-success">
            <h5>New Setting</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">cover</label>
                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                    @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">info</label>
                    <input type="text" name="info" class="form-control @error('info') is-invalid @enderror">
                    @error('info')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">bio</label>
                    <input type="text" name="bio" class="form-control @error('bio') is-invalid @enderror">
                    @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">about</label>
                    <input type="text" name="about" class="form-control @error('about') is-invalid @enderror">
                    @error('about')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

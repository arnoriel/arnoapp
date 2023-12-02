@extends('layouts.admin')
@section('content')
                <div class="card" >
                    <div class="card-header bg-success text-white"><h5>Edit Setting</h5></div>
                    <div class="card-body">
                        <form action="{{route('setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">title</label>
                                <input type="text" name="title" value="{{$setting->title}}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">cover</label>
                                <input type="file" name="cover" value="{{$setting->cover}}" class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">info</label>
                                <input type="text" name="info" value="{{$setting->info}}" class="form-control @error('info') is-invalid @enderror">
                                @error('info')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">bio</label>
                                <input type="text" name="bio" value="{{$setting->bio}}" class="form-control @error('bio') is-invalid @enderror">
                                @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">about</label>
                                <input type="text" name="about" value="{{$setting->about}}" class="form-control @error('about') is-invalid @enderror">
                                @error('about')
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
@endsection
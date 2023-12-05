@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
    <br>
    <div class="card col-md-15">
        <div class="card-body">
            <h5 class="card-title fw-semibold">Article Data Total:</h5>
            <br>
            <h1>{{ DB::table('articles')->count() }}</h1>
            <br>

            <h5 class="fw-semibold">Recent Articles</h5>
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
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->title }}</td>
                            <td><img src="{{ $data->thumbnail() }}" style="width: 100px;" alt=""></td>
                            <td>{{ $data->creator->name }}</td>
                            <td>{{ $data->date }}</td>
                            <td>
                                <a href="{{ route('article.show', $data->id) }}" class="btn btn-warning"><i
                                        class="ti ti-eye"></i> Show Article</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">User Data Total:</h5>
                    <br>
                    <h1>{{ DB::table('users')->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Creator Data Total:</h5>
                    <br>
                    <h1>{{ DB::table('creators')->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

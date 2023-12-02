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
            <table id="myTable">
                <thead>
                    <th>No</th>
                    <th>Title</th>
                </thead>
                @php $no=1 @endphp
                @foreach ($article as $atc)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $atc->title }}</td>
                        </tr>
                    </tbody>
                @endforeach
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

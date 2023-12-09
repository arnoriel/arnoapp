@extends('main.layout')

@section('content')
    @foreach ($setting as $set)
        <section id="hero">

            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>{{ $set->title }}</h1>
                        <h2>{{ $set->bio }}</h2>
                        <a href="/artikel" class="btn-get-started">Baca Artikel</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="{{ $set->cover() }}" class="img-fluid" alt="" style="width: 400px;">
                </div>
            </div>

        </section><!-- End Hero -->

        <h3>Kenapa Harus {{ $set->title }}?</h3>
        <br>
        <h4>{{ $set->info }}</h4>

        <br>
        <h3>Artikel</h3>
        <h5>Ketuk tombol Nomor untuk scroll ke Artikel Terbaru</h5>
        <br>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Author</th>
                </tr>
            <tbody>
                @php $no=1 @endphp
                @foreach ($article as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><a href="/main/{{ $data->id }}"><img src="{{ $data->thumbnail() }}"
                                    style="width: 300px;"></a></td>
                        <td><strong><a href="/main/{{ $data->id }}" class="text-dark">{{ $data->title }}</a></strong></td>
                        <td><strong>{{ $data->creator->name }}</strong></td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        <br>
        <h3>Tentang {{ $set->title }}</h3>
        <h5>
            <p>{{ $set->about }}</p>
        </h5>
    @endforeach
@endsection

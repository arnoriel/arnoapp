@extends('layouts.admin')

@section('content')
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <form action="{{ route('article.update',$article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="font-weight-bold">Title</label>
                    <input type="text" value="{{$article->title}}" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') }}" placeholder="Insert Title">

                    <!-- error message untuk title -->
                    @error('title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label class="font-weight-bold">Thumbnail</label>
                    <input type="file" value="{{$article->thumbnail()}}" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail">

                    <!-- error message untuk title -->
                    @error('thumbnail')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Image Source (Link or Title): </label>
                    <input type="text" value="{{$article->title}}" class="form-control @error('imgsrc') is-invalid @enderror" name="imgsrc"
                        value="{{ old('imgsrc') }}" placeholder="Insert Source">

                    <!-- error message untuk imgsrc -->
                    @error('imgsrc')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label class="font-weight-bold">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"  value="{{$article->content}}"
                        placeholder="Masukkan Konten">{{ old('content') }}</textarea>

                    <!-- error message untuk content -->
                    @error('content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group" style="width: 450px;">
                            <label class="font-weight-bold">Creator</label>
                            <select class="form-select" value="{{$article->creator->name}}" aria-label="Default select example" name="creator_id"
                                id="">
                                <option selected>Select Creator</option>
                                @foreach ($creator as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group" style="width: 450px;">
                            <label for="">Date Created</label>
                            <input type="date" name="date" value="{{$article->date}}" class="form-control @error('date') is-invalid @enderror">
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-md btn-primary">Save</button>
                <button type="reset" class="btn btn-md btn-warning">Reset</button>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

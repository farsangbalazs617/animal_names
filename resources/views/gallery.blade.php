@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="my-5">Gallery with images István Fekete and his books</h1>
        <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Upload an image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>

            <hr class="my-2">
            
            <button class="btn btn-primary mb-4" type="submit">Upload</button>

        </form>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($images as $image)
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img width="300" src="{{ asset('images/uploaded/'.$image->getFilename())}}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a class="card-title text-danger fs-3 text-decoration-none" role="button">X</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>

@endsection
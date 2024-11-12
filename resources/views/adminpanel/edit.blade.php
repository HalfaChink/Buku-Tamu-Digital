@extends('layouts/app')

@section('title')
Edit
@endsection

@section('content')

<div class="container">
    <h2>Edit Carousel Images</h2>

    <!-- Display Carousel Images -->
    <div class="row mb-4">
        @foreach($carouselImages as $carousel)
        <div class="col-md-4">
            <img src="{{ asset('admin/img/' . $carousel->image) }}" class="img-thumbnail mb-2" alt="carousel image">
            <form action="{{ route('carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Update Image</button>
            </form>
            <form action="{{ route('carousel.destroy', $carousel->id) }}" method="POST" class="mt-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Image</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Add New Carousel Image -->
    <h4>Add New Image</h4>
    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control mb-2">
        <button type="submit" class="btn btn-success">Add Image</button>
    </form>
</div>
@endsection
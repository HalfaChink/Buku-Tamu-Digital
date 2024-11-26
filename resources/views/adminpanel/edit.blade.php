@extends('layouts/app')

@section('title')
Edit
@endsection

@section('content')

<div class="container">
    <h2>Edit Carousel</h2>

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

    <h4>Tambah Image Baru</h4>
    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control mb-2">
        <button type="submit" class="btn btn-success">Tambahkan Image</button>
    </form>

    <h4>Siapa Saja Yang Pernah Berkunjung</h4>
    <div class="row mb-4">
        @foreach($visitorData as $visitor)
        <div class="col-md-4">
            <img src="{{ asset('admin/img/' . $visitor->image) }}" class="img-thumbnail mb-2" alt="visitor image">
            <form action="{{ route('visitor.update', $visitor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" name="image" class="form-control mb-2">
                <input type="text" name="visit_text" class="form-control mb-2" value="{{ $visitor->visit_text }}">
                <button type="submit" class="btn btn-primary">Update Visitor</button>
            </form>
            <form action="{{ route('visitor.destroy', $visitor->id) }}" method="POST" class="mt-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Visitor</button>
            </form>
        </div>
        @endforeach
    </div>

    <h4>Tambah Visitor Baru</h4>
    <form action="{{ route('visitor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control mb-2">
        <input type="text" name="visit_text" class="form-control mb-2" placeholder="Enter visit text">
        <button type="submit" class="btn btn-success">Tambahkan Visitor</button>
    </form>
</div>

@endsection
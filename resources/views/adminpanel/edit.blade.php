@extends('layouts/app')

@section('title')
Edit
@endsection

@section('content')

<style>
         button{
             width: 45%;
         }
         .btn-danger{
            float: right;
            margin-top: -42px;
        }
     @media screen and (max-width: 576px){
        button{
        width: 100%;
        }
        .btn-danger{
            float: none;
            margin-top: 5px;
        }
     }
</style>

<div class="container">
    <h2>Edit Carousel</h2>

    <!-- Display Carousel Images -->
    <div class="row mb-4">
        @foreach($carouselImages as $carousel)
        <div class="col-md-4">
            <img src="{{ asset('admin/img/' . $carousel->image) }}" class="img-thumbnail my-3" alt="carousel image">
            <form action="{{ route('carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" class="form-control mb-2 p-1">
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

    <h4 class="mt-5 mb-2">Tambah Image Baru</h4>
    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control mb-2 p-1">
        <button type="submit" class="btn btn-success">Tambahkan Image</button>
    </form>
</div>
@endsection
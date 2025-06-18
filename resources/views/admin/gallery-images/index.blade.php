@extends('admin.layouts.app')
   @section('title', 'Gallery Images')
   @section('content')
   <h1 class="mt-4">Gallery Images</h1>
   <a href="{{ route('admin.gallery-images.create') }}" class="btn btn-primary mb-3">Upload New Image</a>
   <div class="row">
       @foreach ($images as $image)
       <div class="col-md-3 mb-3">
           <div class="card">
               <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="{{ $image->title }}">
               <div class="card-body">
                   <h5 class="card-title">{{ $image->title }}</h5>
                   <a href="{{ route('admin.gallery-images.edit', $image) }}" class="btn btn-sm btn-warning">Edit</a>
                   <form action="{{ route('admin.gallery-images.destroy', $image) }}" method="POST" class="d-inline">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                   </form>
               </div>
           </div>
       </div>
       @endforeach
   </div>
   {{ $images->links() }}
   @endsection
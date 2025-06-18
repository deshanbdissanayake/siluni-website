@extends('admin.layouts.app')
   @section('title', 'Edit Gallery Image')
   @section('content')
   <h1 class="mt-4">Edit Gallery Image</h1>
   <form action="{{ route('admin.gallery-images.update', $galleryImage) }}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="mb-3">
           <label for="title" class="form-label">Title</label>
           <input type="text" class="form-control" id="title" name="title" value="{{ $galleryImage->title }}" required>
       </div>
       <div class="mb-3">
           <label for="image_path" class="form-label">Image</label>
           <img src="{{ asset('storage/' . $galleryImage->image_path) }}" alt="{{ $galleryImage->title }}" width="100" class="mb-3">
           <input type="file" class="form-control" id="image_path" name="image_path">
       </div>
       <div class="mb-3">
           <label for="description" class="form-label">Description</label>
           <textarea class="form-control" id="description" name="description" rows="5">{{ $galleryImage->description }}</textarea>
       </div>
       <button type="submit" class="btn btn-primary">Update</button>
   </form>
   @endsection
@extends('admin.layouts.app')
   @section('title', 'Upload Gallery Image')
   @section('content')
   <h1 class="mt-4">Upload Gallery Image</h1>
   <form action="{{ route('admin.gallery-images.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="mb-3">
           <label for="title" class="form-label">Title</label>
           <input type="text" class="form-control" id="title" name="title" required>
       </div>
       <div class="mb-3">
           <label for="image_path" class="form-label">Image</label>
           <input type="file" class="form-control" id="image_path" name="image_path" required>
       </div>
       <div class="mb-3">
           <label for="description" class="form-label">Description</label>
           <textarea class="form-control" id="description" name="description" rows="5"></textarea>
       </div>
       <button type="submit" class="btn btn-primary">Upload</button>
   </form>
   @endsection
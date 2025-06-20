@extends('admin.layouts.app')
   @section('title', 'Create Blog Post')
   @section('content')
   <h1 class="mt-4">Create Blog Post</h1>
   <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="mb-3">
           <label for="title" class="form-label">Title</label>
           <input type="text" class="form-control" id="title" name="title" required>
       </div>
       <div class="mb-3">
           <label for="content" class="form-label">Content</label>
           <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
       </div>
       <div class="mb-3">
           <label for="image" class="form-label">Image</label>
           <input type="file" class="form-control" id="image" name="image">
       </div>
       <button type="submit" class="btn btn-primary">Save</button>
   </form>
   @endsection
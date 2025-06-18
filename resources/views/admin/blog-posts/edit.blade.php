@extends('admin.layouts.app')
   @section('title', 'Edit Blog Post')
   @section('content')
   <h1 class="mt-4">Edit Blog Post</h1>
   <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="mb-3">
           <label for="title" class="form-label">Title</label>
           <input type="text" class="form-control" id="title" name="title" value="{{ $blogPost->title }}" required>
       </div>
       <div class="mb-3">
           <label for="content" class="form-label">Content</label>
           <textarea class="form-control" id="content" name="content" rows="10" required>{{ $blogPost->content }}</textarea>
       </div>
       <div class="mb-3">
           <label for="image" class="form-label">Image</label>
           @if ($blogPost->image)
           <img src="{{ asset('storage/' . $blogPost->image) }}" alt="{{ $blogPost->title }}" width="100" class="mb-3">
           @endif
           <input type="file" class="form-control" id="image" name="image">
       </div>
       <button type="submit" class="btn btn-primary">Update</button>
   </form>
   @endsection
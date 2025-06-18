@extends('admin.layouts.app')
   @section('title', 'Blog Posts')
   @section('content')
   <h1 class="mt-4">Blog Posts</h1>
   <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Title</th>
               <th>Image</th>
               <th>Actions</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($posts as $post)
           <tr>
               <td>{{ $post->id }}</td>
               <td>{{ $post->title }}</td>
               <td>
                   @if ($post->image)
                   <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="50">
                   @else
                   No Image
                   @endif
               </td>
               <td>
                   <a href="{{ route('admin.blog-posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                   <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" class="d-inline">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
   {{ $posts->links() }}
   @endsection
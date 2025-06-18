@extends('frontend.layouts.app')
     @section('title', 'Home')
     @section('content')
     <header class="hero bg-primary text-white text-center py-5">
         <h1>Welcome to My Portfolio</h1>
         <p>Showcasing my work and skills</p>
     </header>
     <section class="about py-5">
         <div class="container">
             <h2>About Me</h2>
             <p>Short bio here...</p>
         </div>
     </section>
     <section class="gallery py-5 bg-light">
         <div class="container">
             <h2>Gallery</h2>
             <div class="row">
                 @foreach($galleryImages as $image)
                 <div class="col-md-4 mb-3">
                     <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid" alt="{{ $image->title }}">
                 </div>
                 @endforeach
             </div>
         </div>
     </section>
     <section class="blog py-5">
         <div class="container">
             <h2>Recent Posts</h2>
             @foreach($blogPosts as $post)
             <div class="card mb-3">
                 <div class="card-body">
                     <h5 class="card-title">{{ $post->title }}</h5>
                     <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                     <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                 </div>
             </div>
             @endforeach
         </div>
     </section>
     <section class="contact py-5 bg-light">
         <div class="container">
             <h2>Contact Me</h2>
             <form action="{{ route('contact.store') }}" method="POST">
                 @csrf
                 <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="name" name="name" required>
                 </div>
                 <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                 </div>
                 <div class="mb-3">
                     <label for="message" class="form-label">Message</label>
                     <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary">Send</button>
             </form>
         </div>
     </section>
     @endsection
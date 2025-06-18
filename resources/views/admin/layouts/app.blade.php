<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Admin - {{ config('app.name', 'Portfolio') }} - @yield('title')</title>
       <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
       <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/icon?family=Material+Icons">
       @yield('styles')
   </head>
   <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
               <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav">
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('admin.blog-posts.index') }}">Blog Posts</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('admin.gallery-images.index') }}">Gallery Images</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('admin.inquiries.index') }}">Inquiries</a>
                       </li>
                   </ul>
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="container-fluid">
           <div class="row">
               <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                   <div class="position-sticky pt-3">
                       <ul class="nav flex-column">
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('admin.blog-posts.index') }}">Blog Posts</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('admin.gallery-images.index') }}">Gallery Images</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('admin.inquiries.index') }}">Inquiries</a>
                           </li>
                       </ul>
                   </div>
               </nav>
               <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                   @if (session('success'))
                       <div class="alert alert-success mt-3">{{ session('success') }}</div>
                   @endif
                   @yield('content')
               </main>
           </div>
       </div>
       <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('admin/js/script.js') }}"></script>

       @yield('scripts')
       @section('scripts')
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>
        @endsection
   </body>
   </html>
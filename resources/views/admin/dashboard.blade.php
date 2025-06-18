@extends('admin.layouts.app')
   @section('title', 'Dashboard')
   @section('content')
   <h1 class="mt-4">Dashboard</h1>
   <div class="row">
       <div class="col-xl-3 col-md-12 mb-4">
           <div class="card border-left-primary shadow-sm">
               <div class="card-body">
                   <div class="row no-gutters align-items-center">
                       <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">Blog Posts</div>
                           <div class="h5 mb-2 font-weight-bold text-gray-800">{{ $postCount }}</div>
                       </div>
                       <div class="col-auto">
                           <i class="fas fa-blog fa-2x text-gray-300"></i>
                       </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       <div class="col-xl-4 col-md-6 mb-4">
           <div class="card border-left-success shadow h-100 py-2">
               <div class="card-body">
                   <div class="row no-gutters align-items-center">
                       <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Gallery Images</div>
                           <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $imageCount }}</div>
                       </div>
                       <div class="col-auto">
                           <i class="fas fa-image fa-4x text-gray-300"></i>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   <div class="col-xl-4 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inquiries</div>
                       <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $inquiryCount }}</div>
                   </div>
                   <div class="col-auto">
                       <i class="fas fa-envelope fa-2x text-gray-300"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Recent Blog Posts</h6>
               </div>
               <div class="card-body">
                   @foreach ($recentPosts as $post)
                   <div class="mb-3">
                       <h5>{{ $post->title }}</h5>
                       <p>{{ Str::limit($post->content, 100) }}</p>
                   </div>
                   @endforeach
               </div>
           </div>
       </div>
       <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Recent Inquiries</h6>
               </div>
               <div class="card-body">
                   @foreach ($recentInquiries as $inquiry)
                   <div class="mb-3">
                       <h5>{{ $inquiry->name }}</h5>
                       <p>{{ Str::limit($inquiry->message, 100) }}</p>
                   </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
   @endsection
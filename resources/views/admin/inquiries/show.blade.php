@extends('admin.layouts.app')
   @section('title', 'View Inquiry')
   @section('content')
   <h1 class="mt-4">Inquiry Details</h1>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title">Name: {{ $inquiry->name }}</h5>
           <p class="card-text">Email: {{ $inquiry->email }}</p>
           <p class="card-text">Message: {{ $inquiry->message }}</p>
           <p class="card-text">Received: {{ $inquiry->created_at->format('d M Y, H:i') }}</p>
           <a href="{{ route('admin.inquiries.index') }}" class="btn btn-primary">Back</a>
       </div>
   </div>
   @endsection
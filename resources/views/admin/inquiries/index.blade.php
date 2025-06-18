@extends('admin.layouts.app')
   @section('title', 'Inquiries')
   @section('content')
   <h1 class="mt-4">Inquiries</h1>
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>
               <th>Actions</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($inquiries as $inquiry)
           <tr>
               <td>{{ $inquiry->id }}</td>
               <td>{{ $inquiry->name }}</td>
               <td>{{ $inquiry->email }}</td>
               <td>{{ Str::limit($inquiry->message, 50) }}</td>
               <td>
                   <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-sm btn-primary">View</a>
                   <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="d-inline">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
   {{ $inquiries->links() }}
   @endsection
<?php
   namespace App\Http\Controllers;

   use App\Models\BlogPost;
   use Illuminate\Http\Request;

   class BlogController extends Controller
   {
       public function index()
       {
           $posts = BlogPost::latest()->paginate(10);
           return view('frontend.blog.index', compact('posts'));
       }

       public function show($id)
       {
           $post = BlogPost::findOrFail($id);
           return view('frontend.blog.show', compact('post'));
       }
   }
   ?>
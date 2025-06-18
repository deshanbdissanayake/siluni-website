<?php
   namespace App\Http\Controllers;

   use App\Models\BlogPost;
   use App\Models\GalleryImage;
   use Illuminate\Http\Request;

   class FrontendController extends Controller
   {
       public function home()
       {
           $blogPosts = BlogPost::latest()->take(3)->get();
           $galleryImages = GalleryImage::latest()->take(6)->get();
           return view('frontend.home', compact('blogPosts', 'galleryImages'));
       }

       public function about()
       {
           return view('frontend.about');
       }
   }
   ?>
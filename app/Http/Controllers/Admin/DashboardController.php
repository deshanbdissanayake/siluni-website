<?php
   namespace App\Http\Controllers\Admin;

   use App\Http\Controllers\Controller;
   use App\Models\BlogPost;
   use App\Models\GalleryImage;
   use App\Models\Inquiry;
   use Illuminate\Http\Request;

   class DashboardController extends Controller
   {
       public function index()
       {
           $postCount = BlogPost::count();
           $imageCount = GalleryImage::count();
           $inquiryCount = Inquiry::count();
           $recentPosts = BlogPost::latest()->take(5)->get();
           $recentInquiries = Inquiry::latest()->take(5)->get();

           return view('admin.dashboard', compact('postCount', 'imageCount', 'inquiryCount', 'recentPosts', 'recentInquiries'));
       }
   }
   ?>
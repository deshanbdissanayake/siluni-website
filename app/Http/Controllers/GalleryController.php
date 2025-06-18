<?php
   namespace App\Http\Controllers;

   use App\Models\GalleryImage;
   use Illuminate\Http\Request;

   class GalleryController extends Controller
   {
       public function index()
       {
           $images = GalleryImage::latest()->paginate(12);
           return view('frontend.gallery.index', compact('images'));
       }
   }
   ?>
<?php
   namespace App\Http\Controllers\Admin;

   use App\Http\Controllers\Controller;
   use App\Models\GalleryImage;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Storage;

   class GalleryImageController extends Controller
   {
       public function index()
       {
           $images = GalleryImage::latest()->paginate(12);
           return view('admin.gallery-images.index', compact('images'));
       }

       public function create()
       {
           return view('admin.gallery-images.create');
       }

       public function store(Request $request)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
               'description' => 'nullable|string',
           ]);

           $data = $request->all();
           if ($request->hasFile('image_path')) {
               $data['image_path'] = $request->file('image_path')->store('uploads', 'gallery');
           }

           GalleryImage::create($data);
           return redirect()->route('admin.gallery-images.index')->with('success', 'Image uploaded!');
       }

       public function edit(GalleryImage $galleryImage)
       {
           return view('admin.gallery-images.edit', compact('galleryImage'));
       }

       public function update(Request $request, GalleryImage $galleryImage)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
               'description' => 'nullable|string',
           ]);

           $data = $request->all();
           if ($request->hasFile('image_path')) {
               if ($galleryImage->image_path) {
                   Storage::disk('public')->delete($galleryImage->image_path);
               }
               $data['image_path'] = $request->file('image_path')->store('gallery', 'public');
           }

           $galleryImage->update($data);
           return redirect()->route('admin.gallery-images.index')->with('success', 'Image updated!');
       }

       public function destroy(GalleryImage $galleryImage)
       {
           if ($galleryImage->image_path) {
               Storage::disk('public')->delete($galleryImage->image_path);
           }
           $galleryImage->delete();
           return redirect()->route('admin.gallery-images.index')->with('success', 'Image deleted!');
       }
   }
   ?>
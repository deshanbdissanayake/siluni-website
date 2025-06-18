<?php
   namespace App\Http\Controllers\Admin;

   use App\Http\Controllers\Controller;
   use App\Models\BlogPost;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Storage;

   class BlogPostController extends Controller
   {
       public function index()
       {
           $posts = BlogPost::latest()->paginate(10);
           return view('admin.blog-posts.index', compact('posts'));
       }

       public function create()
       {
           return view('admin.blog-posts.create');
       }

       public function store(Request $request)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'content' => 'required|string',
               'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           ]);

           $data = $request->all();
           if ($request->hasFile('image')) {
               $data['image'] = $request->file('image')->store('blog-posts', 'public');
           }

           BlogPost::create($data);
           return redirect()->route('admin.blog-posts.index')->with('success', 'Post created!');
       }

       public function edit(BlogPost $blogPost)
       {
           return view('admin.blog-posts.edit', compact('blogPost'));
       }

       public function update(Request $request, BlogPost $blogPost)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'content' => 'required|string',
               'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           ]);

           $data = $request->all();
           if ($request->hasFile('image')) {
               if ($blogPost->image) {
                   Storage::disk('public')->delete($blogPost->image);
               }
               $data['image'] = $request->file('image')->store('blog-posts', 'public');
           }

           $blogPost->update($data);
           return redirect()->route('admin.blog-posts.index')->with('success', 'Post updated!');
       }

       public function destroy(BlogPost $blogPost)
       {
           if ($blogPost->image) {
               Storage::disk('public')->delete($blogPost->image);
           }
           $blogPost->delete();
           return redirect()->route('admin.blog-posts.index')->with('success', 'Post deleted!');
       }
   }
   ?>
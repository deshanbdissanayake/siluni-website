<?php
   namespace App\Http\Controllers;

   use App\Models\Inquiry;
   use Illuminate\Http\Request;

   class ContactController extends Controller
   {
       public function index()
       {
           return view('frontend.contact');
       }

       public function store(Request $request)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|email|max:255',
               'message' => 'required|string',
           ]);

           Inquiry::create($request->all());
           return redirect()->route('contact.index')->with('success', 'Message sent!');
       }
   }
   ?>
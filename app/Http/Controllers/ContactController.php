<?php
    namespace App\Http\Controllers;

    use App\Models\Inquiry;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use App\Mail\ContactMail;

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

        public function sendEmail(Request $request)
        {
            // Validate form input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|min:10',
            ]);

            // Prepare data for email
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            // Send email
            Mail::to('contact@yourdomain.com')->send(new ContactMail($details));

            // Redirect back with success message
            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } 
   }
   ?>
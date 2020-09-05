<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function handleForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|string',
            'email' => 'required|email',
            'mobile' => 'required|digits:11',
            'message' => 'required|min:10'
        ]);

        $data = array(
          'name' => $request->name,
          'email' => $request->email,
          'mobile' => $request->mobile,
          'subject' => $request->subject,
          'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->replyTo($data['email']);
            $message->to('preshblogger@gmail.com');
            $message->subject($data['name']);
        });

        // Session::flash('success', 'Your email has been sent');

        return redirect('contact')->with('success', 'Your email has been sent');
    }

}
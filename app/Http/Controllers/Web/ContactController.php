<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
            'mobile' => ['required','digits:10','numeric'],
        ]);
    
        $data = [
            'name' => $request->input('name'),
            'maininfo' => $request->input('message'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
        ];

        Mail::to('gulzarc5@gmail.com')->send(new ContactMail($data));
    
        return redirect()->back()->with('message','Thanks For The Query We Will Get Back To You Soon');
    }
}

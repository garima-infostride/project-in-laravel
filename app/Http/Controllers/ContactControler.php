<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Mail;


class ContactControler extends Controller
{
    public function show()
    {
        $data['contacts'] = Contact::paginate(10);
        return view('admin.contact.contact-form', $data);
    }
    public function create()
    {
        return view('email');
    }
    public function contact_store(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        Mail::send('email-template', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });
        $contact = Contact::create($data);

        if ($contact)
            return back()->with('message_sent', 'Thanks! Email has been succesfuly sent to you..... !');
    }
}

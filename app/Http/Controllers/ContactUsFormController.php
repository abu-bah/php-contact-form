<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactUsFormController extends Controller
{
    /**
     * @var string
     */
    protected $adminEmail = 'guy-smiley@example.com';

    /**
     * Store the contact form data.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        // Store contact form data in database
        Contact::create($request->all());

        // Send email to admins
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($this->adminEmail, 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Thank you for contacting us! We will get back to you as soon as possible.');
    }
}

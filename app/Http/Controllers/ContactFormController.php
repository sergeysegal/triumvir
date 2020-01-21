<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $message = filter_var($request->get('message'), FILTER_SANITIZE_STRING);

        $validated = $request->validate([
            'firstName' => 'required|alpha_spaces',
            'lastName' => 'required|alpha',
            'phone' => 'alpha_dash',
            'email' => 'required|email',
            'subject' => 'required|alpha_spaces',
            'message' => 'required|string'
        ]);

        $contactForm = new ContactForm();
        $contactForm->firstName = $firstName;
        $contactForm->lastName = $lastName;
        $contactForm->phone = $phone;
        $contactForm->email = $email;
        $contactForm->subject = $subject;
        $contactForm->message = $message;

        $contactForm->save();
        return view('contact.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
//        return view('contact.show', compact('contactForm'));
    }

    public function showAll()
    {
        $forms = ContactForm::all();
        return view('contact.show-all', compact("forms"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}

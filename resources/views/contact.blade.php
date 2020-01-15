<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Contact Us')

@section('content')
    <div class="sergey-contact-form">
        <div id="container">
            <h1>Contact Form</h1>
            <div class="underline">
            </div>
            <form action="#" method="post" id="contact_form">
                <div class="name">
                    <label for="name"></label>
                    <input type="text" placeholder="Name" name="name" id="name_input" required>
                </div>
                <div class="telephone">
                    <label for="name"></label>
                    <input type="text" placeholder="Phone" name="telephone" id="telephone_input" required>
                </div>
                <div class="email">
                    <label for="email"></label>
                    <input type="email" placeholder="Email" name="email" id="email_input" required>
                </div>
                <div class="subject">
                    <label for="subject"></label>
                    <select placeholder="Subject line" name="subject" id="subject_input" required>
                        <option disabled hidden selected>Subject line</option>
                        <option>General Inquiry</option>
                        <option>Customer Support</option>
                        <option>Product Inquiry</option>
                    </select>
                </div>
                <div class="message">
                    <label for="message"></label>
                    <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Send Message" id="form_button" />
                </div>
            </form><!-- // End form -->
        </div><!-- // End #container -->
    </div>
{{--    https://www.jotform.com/blog/20-code-snippets-contact-forms-98615/--}}
@endsection

@section('scripts')

@endsection

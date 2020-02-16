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
            <div class="row justify-content-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="first-name">
                    <label for="firstName"></label>
                    <input type="text" placeholder="First Name" name="firstName" required>
                </div>
                <div class="last-name">
                    <label for="lastName"></label>
                    <input type="text" placeholder="Last Name" name="lastName" required>
                </div>
                <div class="phone">
                    <label for="name"></label>
                    <input type="text" placeholder="Phone" name="phone">
                </div>
                <div class="email">
                    <label for="email"></label>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="subject">
                    <label for="subject"></label>
                    <select placeholder="Subject line" name="subject" required>
                        <option disabled hidden selected>Subject line</option>
                        <option>General Inquiry</option>
                        <option>Customer Support</option>
                        <option>Product Inquiry</option>
                    </select>
                </div>
                <div class="message">
                    <label for="message"></label>
                    <textarea name="message" placeholder="Message" cols="30" rows="5" required></textarea>
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

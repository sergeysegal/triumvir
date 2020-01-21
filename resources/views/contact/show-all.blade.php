<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Contact Us')

@section('content')
    <div class="container">
        @foreach($forms as $form)
            <div class="row">
                <div class="col-md-3">
                    Name: {{$form->firstName." ".$form->lastName}}
                    <br>
                    Email: {{$form->email}}
                    <br>
                    Phone: {{$form->phone}}
                    <br>
                    Posted: {{$form->created_at}}
                </div>
                <div class="col-md-9">
                    Subject: {{$form->subject}}
                    <br>
                    {{$form->message}}
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection

@section('scripts')

@endsection



<?php

?>

@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/our-team.css') }}">
@endsection

@section('pageTitle', 'About Us')

@section('content')
    <h1>About Us</h1>

    <h1>Our Team</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hi There !</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Martin Smith</h5>
                    <span>founder &amp; ceo</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
{{--                        <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">--}}
                        <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hello World</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Franklin Harbet</h5>
                    <span>HR Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
{{--                        <img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" class="img-responsive">--}}
                        <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>I love to design</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Linda Anderson</h5>
                    <span>Marketing Manager</span>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('scripts')

@endsection

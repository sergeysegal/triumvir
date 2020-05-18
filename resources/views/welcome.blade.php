<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Welcome')

@section('content')
    <div class="sergey-product-page">
        <section class="hero">
            <div class="heading">
                <h1>Triumvir Technologies</h1>
                <div class="heading-subtitle">
                    <p>A deep learning software solution to enhance crop yields</p>
                    {{--                    <p>Crop disease treatment solution for farmers worldwide</p>--}}
                </div>
            </div>
        </section>
        <div class="section-title">What we're building</div>
        <section class="what-we-offer">
            <article class="item">
                <div class="title">Screening</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/screening-drone.jpg')}}" class="round-corners" alt="">
                </div>
                <div class="description">Our drones will scan your fields and utilize deep learning to identify anomalies such as disease and pest damage.
                </div>
            </article>
            <article class="item">
                <div class="title">Geotagging</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/geospatial-map.png')}}" alt="">
                    {{--                    https://pixabay.com/vectors/map-pin-icon-map-pin-travel-1272165/--}}
                </div>
                <div class="description">Our web application will map your fields with GPS-denoted pins marking diseased plants and other anomalies.
                </div>
            </article>
            <article class="item">
                <div class="title">Treatment</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/drone-spraying.jpg')}}" class="round-corners" alt="">
                    {{--                    https://www.piqsels.com/en/public-domain-photo-jnquc--}}
                </div>
                <div class="description">Our drones, driven by deep learning models, will surgically apply pesticides to problem areas, saving you time and money.
                </div>
            </article>
        </section>
        <div class="section-title">Partner with us</div>

        <section class="how-it-works">
            <article class="item">
                <div class="icon-container" style="font-size: 3rem;">
                    <i class="fas fa-leaf"></i>
                    {{--                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">--}}
                </div>
                <div class="text-container">
                    <div class="title">1. Are you a farmer, agronomist or crop researcher interested in using cutting edge technology to enhance crop yields and reduce environmental runoff?</div>
                    {{--                    <p><a href="{{route('contact.index')}}">Contact</a></p>--}}
                </div>
            </article>
            <article class="item">
                <div class="icon-container" style="font-size: 3rem;">
                    <i class="far fa-handshake"></i>
                    {{--                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">--}}
                </div>
                <div class="text-container">
                    <div class="title">2. We’re looking for both private and public partners to jointly build our solution.  Contact us to discuss potential opportunities to be the future of agriculture.</div>
                    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>--}}
                </div>
            </article>
        </section>

        {{--        <div class="section-title">How it works</div>--}}
        {{--        <section class="how-it-works">--}}
        {{--            <article class="item">--}}
        {{--                <div class="icon-container">--}}
        {{--                    <i class="f7-icons size-56">calendar_badge_plus</i>--}}
        {{--                </div>--}}
        {{--                <div class="text-container">--}}
        {{--                    <div class="title">1. <a href="{{route('contact.index')}}">Book an appointment</a> for a free consultation</div>--}}
        {{--                </div>--}}
        {{--            </article>--}}
        {{--            <article class="item">--}}
        {{--                <div class="icon-container">--}}
        {{--                    <i class="f7-icons size-56">info_circle</i>--}}
        {{--                </div>--}}
        {{--                <div class="text-container">--}}
        {{--                    <div class="title">2. Discuss your options</div>--}}
        {{--                </div>--}}
        {{--            </article>--}}
        {{--            <article class="item">--}}
        {{--                <div class="icon-container" style="font-size: 3rem;">--}}
        {{--                    <i class="far fa-handshake"></i>--}}
        {{--                </div>--}}
        {{--                <div class="text-container">--}}
        {{--                    <div class="title">3. If you choose to move forward, we will come and get the job done!</div>--}}
        {{--                </div>--}}
        {{--            </article>--}}
        {{--        </section>--}}
    </div>

@endsection

@section('scripts')

@endsection

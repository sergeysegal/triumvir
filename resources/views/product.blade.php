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
                    <p>Crop disease treatment solution for farmers worldwide</p>
                </div>
            </div>
        </section>
        <div class="section-title">What we offer</div>
        <section class="what-we-offer">
            <article class="item">
                <div class="title">Crop Screening</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/screening-drone.jpg')}}" class="round-corners" alt="">
                </div>
                <div class="description">Our drones will scan your fields and utilize machine learning to identify diseased plants.
                </div>
            </article>
            <article class="item">
                <div class="title">Disease Geotagging</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/geospatial-map.png')}}" alt="">
{{--                    https://pixabay.com/vectors/map-pin-icon-map-pin-travel-1272165/--}}
                </div>
                <div class="description">Our web application will map your fields with GPS-denoted pins marking plants with positive or negative indications of crop disease.
                </div>
            </article>
            <article class="item">
                <div class="title">Fungicide Application</div>
                <div class="img-container">
                    <img src="{{asset('images/pages/product/drone-spraying.jpg')}}" class="round-corners" alt="">
{{--                    https://www.piqsels.com/en/public-domain-photo-jnquc--}}
                </div>
                <div class="description">Our drones will surgically apply fungicide to diseased plants, saving you time and money.
                </div>
            </article>
        </section>
        <div class="section-title">How it works</div>
        <section class="how-it-works">
            <article class="item">
                <div class="icon-container">
                    <i class="f7-icons size-56">calendar_badge_plus</i>
{{--                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">--}}
                </div>
                <div class="text-container">
                    <div class="title">1. Book an appointment for a free consultation</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>
                </div>
            </article>
            <article class="item">
                <div class="icon-container">
                    <i class="f7-icons size-56">info_circle</i>
{{--                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">--}}
                </div>
                <div class="text-container">
                    <div class="title">2. Discuss your options</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>
                </div>
            </article>
            <article class="item">
                <div class="icon-container" style="font-size: 3rem;">
                    <i class="far fa-handshake"></i>
{{--                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">--}}
                </div>
                <div class="text-container">
                    <div class="title">3. If you choose to move forward, we will come and get the job done!</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>
                </div>
            </article>
        </section>
    </div>

@endsection

@section('scripts')

@endsection

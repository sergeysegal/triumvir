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
                    <p>Identification and removal of diseased plants</p>
                </div>
            </div>
        </section>
        <div class="section-title">What we offer</div>
        <section class="what-we-offer">
            <article class="item">
                <div class="title">Field Screening</div>
                <div class="img-container">
                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur corporis dicta dignissimos dolor expedita illo incidunt labore modi nemo perspiciatis quae repellat, suscipit tempore voluptatibus. Accusantium exercitationem natus vel!
                </div>
            </article>
            <article class="item">
                <div class="title">Geospatial Mapping</div>
                <div class="img-container">
                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cumque dignissimos eum eveniet ex fugiat illo illum ipsum itaque iusto laborum maiores minus, natus perspiciatis rem tempore voluptates? Iure, nam!
                </div>
            </article>
            <article class="item">
                <div class="title">Fungicide Application</div>
                <div class="img-container">
                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at cumque error id labore obcaecati tenetur voluptates! Asperiores autem dolores, earum eveniet, hic iste nemo praesentium quos sequi tempore ut?
                </div>
            </article>
        </section>
        <div class="section-title">How it works</div>
        <section class="how-it-works">
            <article class="item">
                <div class="img-container">
                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">
                </div>
                <div class="text-container">
                    <div class="title">1. Book an appointment</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>
                </div>
            </article>
            <article class="item">
                <div class="img-container">
                    <img src="{{asset('images/tiger1-800by600.jpg')}}" alt="">
                </div>
                <div class="text-container">
                    <div class="title">1. Book an appointment</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolorum fugiat laudantium minima reiciendis sit?</p>
                </div>
            </article>
        </section>
    </div>

@endsection

@section('scripts')

@endsection

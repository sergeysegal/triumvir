<?php
    $titles = ['Our Mission', 'Our Culture', 'Employee Benefits'];
    $descriptions = ["We aim to provide a crop disease treatment solution to the agricultural industry to enhance crop yields while simultaneously decreasing toxic environmental runoff.",
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, rem?',
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatem!'
                    ];

//$mydata = 'hello';
?>

@extends('layouts.default')

@section('pageTitle', 'Welcome')

@section('content')
{{--    <career-page-selector :test='@json($mydata)' test2="lala"></career-page-selector>--}}
    <div class="sergey-career-page">
        <section class="search">
            <a href="#">Search all jobs</a>
        </section>
        <section class="mission">
            <tab-value-selector :titles='@json($titles)' :descriptions='@json($descriptions)'></tab-value-selector>
        </section>
    </div>
@endsection

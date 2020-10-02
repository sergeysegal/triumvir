<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Welcome')

@section('content')
    <div class="sergey-demos-index-page">
        <ul>
            <li><a href="{{route('demos.mobile-net-images')}}">MobileNet CNN</a></li>
            <li><a href="{{route('demos.pipeline')}}">Product Pipeline</a></li>
        </ul>
    </div>
@endsection

@section('scripts')

@endsection

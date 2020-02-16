<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Welcome')

@section('content')
    <div class="sergey-demos-index-page">
        <ul>
            <li><a href="{{route('demos.mobile-net-images')}}">MobileNet images</a></li>
        </ul>
        <p>Welcome page</p>
    </div>
@endsection

@section('scripts')

@endsection

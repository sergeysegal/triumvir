<?php

?>

@extends('layouts.default')

@section('pageTitle', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Welcome {{Auth::user()->name}}</h1>
    </div>
</div>
@endsection

@section('scripts')

@endsection

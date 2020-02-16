<?php

use Illuminate\Support\Arr;



$user_roles = Arr::flatten($user_roles);
$unassigned_roles = [];
$all_role_names = [];
foreach ($all_roles as $role) {
    $all_role_names[] = $role['name'];
}
$all_role_names = Arr::flatten($all_role_names);

foreach ($all_role_names as $role) {
    if(!in_array($role, $user_roles)){
        $unassigned_roles[] = $role;
    }
}
?>
{{--{{print_r($unassigned_roles)}}--}}
@extends('layouts.admin')

@section('pageTitle', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{$user->name}}</div>
                <div class="card-body">

                    <form action="{{route('admin.users.update', $user)}}" method="post">
                        @csrf
                        {{method_field('put')}}
                        @foreach($user_roles as $user_role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$user_role}}" checked>
                                <label>{{$user_role}}</label>
                            </div>
                        @endforeach
                        @foreach($unassigned_roles as $unassigned_role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$unassigned_role}}">
                                <label>{{$unassigned_role}}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?php

if(Auth::guest()) {
    echo "You do not have permission to view this page.";
    return;
}
else if (Bouncer::is(Auth()->user())->notAn('admin','root')) {
    echo "You do not have permission to view this page.";
    return;
}

?>

@extends('layouts.admin')

@section('pageTitle', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->getRoles()}}</td>
                                <td>
                                    <a href="{{route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                    <form action="{{route('admin.users.destroy', $user)}}" method="post" class="float-left ml-1">
                                        @csrf
                                        {{method_field('delete')}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<?php
use Illuminate\Support\Facades\Storage;

if(Auth::guest()) {
    echo "You do not have permission to view this page.";
    return;
}
else if (Bouncer::is(Auth()->user())->notAn('admin','root')) {
    echo "You do not have permission to view this page.";
    return;
}

//    dd(request()->all());
?>
@extends('layouts.default')

@section('pageTitle', 'Upload')

@section('content')
    <div class="sergey-jobs-create-page">
        <div class="content-title">
            <h4>Create new job posting</h4>
        </div>
        <section class="content-main">
            <div class="content-items">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="content-form" method="post">
                    @csrf
                    <label for="job_id">Job Id:</label>
                    <input type="text" name="job_id" id="job_id">
                    <br>
                    <label for="job_title">Job Title:</label>
                    <input type="text" name="job_title" id="job_title">
                    <br>
                    <label for="team_title">Team Title:</label>
                    <input type="text" name="team_title" id="team_title">
                    <br>
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location">
                    <br>
                    <label for="role_desc">Role description:</label>
                    <br>
                    <textarea name="role_desc" id="role_desc" cols="30" rows="5"></textarea>
                    <br>
                    <label for="responsibilities">Responsibilities:</label>
                    <br>
                    <textarea name="responsibilities" id="responsibilities" cols="30" rows="5"></textarea>
                    <br>
                    <label for="qualifications">Qualifications</label>
                    <br>
                    <textarea name="qualifications" id="qualifications" cols="30" rows="5"></textarea>
                    <br>
                    <input type="submit" class="btn btn-success" value="Upload" formaction="{{action('JobController@store')}}" id="submit-btn">
                    @if(isset($message))
                        @if($status == "failure")
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @else
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif
                    @endif
                    @if(isset($messages))
                        @if($status == "failure")
                            @foreach($messages as $message)
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @else
                            @foreach($messages as $message)
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    @endif
                </form>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

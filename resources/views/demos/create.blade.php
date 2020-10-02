<?php
use Illuminate\Support\Facades\Storage;

if(Auth::guest()) {
    echo "You do not have permission to view this page.";
    return;
}
else if (Bouncer::is(Auth()->user())->notAn('admin', 'superadmin', 'organizer')) {
    echo "You do not have permission to view this page.";
    return;
}
?>
@extends('layouts.default')

@section('pageTitle', 'Upload')

@section('content')
    <div class="sergey-pipeline-create-page">
        <div class="content-title">
            <h4>Create a new pipeline</h4>
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
                <form id="target" class="content-form" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="container">
                        <input type="hidden" id="organizer" name="organizer" value="<?php echo Auth::user()->name;?>">
                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="ref_code">Event Reference Code:</label>--}}
                        {{--                            <input type="text" name="ref_code" id="ref_code" class="form-control">--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label for="crop_type">Crop Type:</label>
                            <input type="text" name="crop_type" id="crop_type" class="form-control">
                        </div>
                        <label for="file">Images:</label>
                        @include('snippets.file-upload-btn')
                        <div class="form-group">
                            <label for="planting_date">Planting Date:</label>
                            <input type="date" name="planting_date" id="planting_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imaging_date">Imaging Date:</label>
                            <input type="date" name="imaging_date" id="imaging_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="state">Planting State:</label>
                            @include('snippets.us-states')
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments:</label>
                            <textarea name="comments" id="comments" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success" value="Submit" formaction="{{action('DemoController@store')}}" id="submit-btn">
                        </div>
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
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

{{--***** COPY/(MODIFY) STYLES BELOW TO VIEW WHERE BUTTON IS USED ***********--}}
@section('styles')
    <style>
        .sergey-file-upload-btn {
            max-width: 400px;
        }

        .sergey-file-upload-btn .filename {
            margin: 5px auto 10px auto;
        }

        .sergey-file-upload-btn .file-upload input[type='file'] {
            display: none;
        }
    </style>
@endsection

{{--***** COPY JAVASCRIPT BELOW TO VIEW WHERE BUTTON IS USED ***********--}}
@section('scripts')
    <script>
        function getFileName() {
            let fileName = document.getElementById('fileUpload').value.split('/').pop();
            let name1 = fileName.split('//').pop();
            let name2 = fileName.split('\\').pop();
            if (name1.length < name2.length) {
                fileName = name1;
            }
            else {
                fileName = name2;
            }
            $(".filename").text(fileName);
        }

        $("#fileUpload").change(getFileName);
        // $("#vs1__combobox").click(getArtists);

    </script>
@endsection

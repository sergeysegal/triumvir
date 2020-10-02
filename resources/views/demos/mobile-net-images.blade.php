<?php
    use Illuminate\Support\Facades\Storage;

    $userId = Auth::user()->id;
?>

@extends('layouts.ml')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            <p>Test your own <strong>.jpg</strong> file with a <a href="https://arxiv.org/abs/1704.04861">MobileNet</a> CNN model</p>
        </div>
            <form class="admin-content-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-row justify-content-center my-flex-container">
                    @include('snippets.file-upload-btn')
                </div>
{{--                    <div class="row justify-content-center mb-1">--}}
{{--                        <input type="file" class="form-control-file" name="file" id="file-btn">--}}
{{--                    </div>--}}
                <div class="d-flex flex-row justify-content-center my-flex-container">
                    <input type="submit" class="btn btn-success" value="Upload" formaction="{{action('DemoController@store')}}" id="submit-btn">
                </div>
            </form>
        <div class="row justify-content-center mt-2">
            @if(File::exists("storage/users/$userId/file.jpg"))
                <img id="myImage" src='{{asset("storage/users/$userId/file.jpg")}}' alt="img">
            @else
                <p>Upload your file</p>
            @endif
        </div>
        <div class="row">
            <div class="col text-md-right">
                <strong>Labels</strong>
            </div>
            <div class="col">
                <strong>Probabilities</strong>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-right">
                <div id="label0"></div>
            </div>
            <div class="col">
                <div id="prob0"></div>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-right">
                <div id="label1"></div>
            </div>
            <div class="col">
                <div id="prob1"></div>
            </div>
        </div>
        <div class="row">
            <div class="col text-md-right">
                <div id="label2"></div>
            </div>
            <div class="col">
                <div id="prob2"></div>
            </div>
        </div>
    </div>
@endsection

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

@section('scripts')
    <script>
        id = "<?php echo $userId; ?>";
        localStorage.setItem('userId', id);

        //file upload button js:
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
            console.log(name1);
            console.log(name2);

        }

        $("#fileUpload").change(getFileName);
    </script>
    <script src="{{asset('js/img-prob-mobilenet.js')}}"></script>
@endsection

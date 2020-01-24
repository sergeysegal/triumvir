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
        <div class="row justify-content-center">
            <div class="col"></div>
            <div class="col">
                <form class="admin-content-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center mb-1">
                        <input type="file" class="form-control-file" name="file" id="file-btn">
                    </div>
                    <input type="submit" class="btn btn-success" value="Upload" formaction="{{action('DemoController@store')}}" id="submit-btn">
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <img src='{{asset("storage/users/$userId/file.jpg")}}' alt="img">
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

@section('scripts')
    <script>
        id = "<?php echo $userId; ?>";
        localStorage.setItem('userId', id);
    </script>
    <script src="{{asset('js/img-prob-mobilenet.js')}}"></script>
@endsection

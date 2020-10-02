<div class="sergey-file-upload-btn">
    <div class="container">
        <div class="row">
                <label for="fileUpload" class="file-upload btn btn-primary btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>Choose file
                    <input id="fileUpload" type="file" name="file">
                </label>
        </div>
        <div class="row">
            <div class="filename">-- No file selected --</div>
        </div>
    </div>
</div>


{{--***** COPY/(MODIFY) STYLES BELOW TO VIEW WHERE BUTTON IS USED ***********--}}
{{--@section('styles')--}}
{{--    <style>--}}
{{--        .sergey-file-upload-btn {--}}
{{--            max-width: 400px;--}}
{{--        }--}}

{{--        .sergey-file-upload-btn .filename {--}}
{{--            margin: 5px auto 10px auto;--}}
{{--        }--}}

{{--        .sergey-file-upload-btn .file-upload input[type='file'] {--}}
{{--            display: none;--}}
{{--        }--}}
{{--    </style>--}}
{{--@endsection--}}

{{--***** COPY JAVASCRIPT BELOW TO VIEW WHERE BUTTON IS USED ***********--}}
{{--@section('scripts')--}}
{{--    <script>--}}
{{--        function getFileName() {--}}
{{--            let fileName = document.getElementById('fileUpload').value.split('/').pop();--}}
{{--            let name1 = fileName.split('//').pop();--}}
{{--            let name2 = fileName.split('\\').pop();--}}
{{--            if (name1.length < name2.length) {--}}
{{--                fileName = name1;--}}
{{--            }--}}
{{--            else {--}}
{{--                fileName = name2;--}}
{{--            }--}}
{{--            $(".filename").text(fileName);--}}
{{--            console.log(name1);--}}
{{--            console.log(name2);--}}

{{--        }--}}

{{--        $("#fileUpload").change(getFileName);--}}
{{--    </script>--}}
{{--@endsection--}}

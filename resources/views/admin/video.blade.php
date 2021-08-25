@extends('admin.master')

@section('title', 'admin | ' . $page_info->name)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.video.page.edit') }}">
            <div>
                @csrf

                <div class="form-row">
                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon">VIDEO MP4</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="video_mp4" id="video_mp4" class="custom-file-input" aria-describedby="inputGroupFileAddon">
                            <label id="file_name_mp4" class="custom-file-label" for="video_mp4">Choose file</label>
                        </div>
                    </div>

                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon04">VIDEO WEBM</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="video_webm" id="video_webm" class="custom-file-input" aria-describedby="inputGroupFileAddon04">
                            <label id="file_name_webm" class="custom-file-label" for="video_webm">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon1">BG_POSTER JPG</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="bg_image_jpg" id="bg_image_jpg" class="custom-file-input" aria-describedby="inputGroupFileAddon1">
                            <label id="file_name_jpg" class="custom-file-label" for="bg_image_jpg">Choose file</label>
                        </div>
                    </div>

{{--                    <div class="input-group mb-3 col-md-6">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text" id="inputGroupFileAddon04">VIDEO WEBM</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-file">--}}
{{--                            <input type="file" name="video_webm" id="video_webm" class="custom-file-input" aria-describedby="inputGroupFileAddon04">--}}
{{--                            <label id="file_name_webm" class="custom-file-label" for="video_webm">Choose file</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

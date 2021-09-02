@extends('admin.master')

@section('title', 'EDIT')

@section('content')
    <div class="container">

        <hr>

        <h1>EDIT FILE</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('files.update', $file) }}">
            <div>
                @method('PUT')
                @csrf

                @if($file->type == 'image')
                    <div class="input-group flex-nowrap mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon05">IMAGE</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" id="cover" class="custom-file-input" aria-describedby="inputGroupFileAddon05">
                            <label class="custom-file-label" for="cover">Choose file</label>
                        </div>

                    </div>
                @elseif($file->type == 'gif')
                    <div class="input-group flex-nowrap mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon05">GIF</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="gif" id="cover" class="custom-file-input" aria-describedby="inputGroupFileAddon05">
                            <label class="custom-file-label" for="cover">Choose file</label>
                        </div>

                    </div>
                @elseif($file->type == 'marmoset')
                    <div class="form-row">
                        <div class="form-floating mb-3 col-12">
                            <label for="marmoset">MARMOSET</label>
                            <textarea class="form-control" name="marmoset" id="marmoset" style="height: 100px">{{ $file->src }}</textarea>
                        </div>
                    </div>
                @elseif($file->type == 'video')
                    <div class="form-row">
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon">VIDEO MP4</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="video_mp4" id="video_mp4" class="custom-file-input" aria-describedby="inputGroupFileAddon">
                                <label class="custom-file-label" for="video_mp4">Choose file</label>
                            </div>
                        </div>

                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon04">VIDEO WEBM</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="video_webm" id="video_webm" class="custom-file-input" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="video_webm">Choose file</label>
                            </div>
                        </div>
                    </div>
                @endif

                <button class="btn btn-success">EDIT</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

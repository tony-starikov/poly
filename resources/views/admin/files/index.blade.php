@extends('admin.master')

@section('title', 'admin | file')

@section('content')
    <div class="container">

        <hr>

        @foreach($files as $file)
            <p>
            <hr>
                @if($file->type == 'image')
                    <img
                        src="{{ Storage::url($file->src) }}"
                        alt="..."
                        width="50%"
                        style="border-radius: 0;"
                        class="mb-1"
                    />
                @elseif($file->type == 'gif')
                    <img
                        src="{{ Storage::url($file->src) }}"
                        alt="..."
                        width="50%"
                        style="border-radius: 0;"
                        class="mb-1"
                    />
                @elseif($file->type == 'video')
                    <video class="mb-1"
                           width="100%"
                           height="auto"
                           controls="controls"
                           loop autoplay>
                        <source src="{{ Storage::url($file->video_mp4) }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <source src="{{ Storage::url($file->video_webm) }}" type='video/webm; codecs="vp8, vorbis"'>
                        Video error
                    </video>
                @elseif($file->type == 'marmoset')
                    <iframe
                        width='100%'
                        height='400px'
                        src='{{ $file->src }}'
                        frameborder='0' allowfullscreen
                        mozallowfullscreen='true'
                        webkitallowfullscreen='true'
                        onmousewheel='true'
                        scrolling='no'>
                    </iframe>
                @endif

            <p>
                <a href="{{ route('files.edit', $file) }}"><button type="button" class="btn btn-success">EDIT</button></a>

                <form id="delete-form" action="{{ route('files.destroy', $file) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="text" name="work_id" value="{{ $work->id }}" style="display: none;">
                    <button type="submit" class="btn btn-primary">DELETE</button>
                </form>
            </p>
                id: {{ $file->id }} | type: {{ $file->type }}
                <hr>
            </p>
        @endforeach

        <h1>id: {{ $work->id }}</h1>

        <hr>

        <h2>ADD IMAGE</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ route('files.store') }}">
            <div>
                @csrf

                <input type="text" name="work_id" value="{{ $work->id }}" style="display: none;">
                <input type="text" name="type" value="image" style="display: none;">

                <div class="input-group flex-nowrap mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon05">IMAGE</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" id="cover" class="custom-file-input" aria-describedby="inputGroupFileAddon05">
                        <label class="custom-file-label" for="cover">Choose file</label>
                    </div>

                </div>

                <button class="btn btn-success my-3">ADD IMAGE</button>
            </div>
        </form>

        <hr>

        <h2>ADD GIF</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ route('files.store') }}">
            <div>
                @csrf

                <input type="text" name="work_id" value="{{ $work->id }}" style="display: none;">
                <input type="text" name="type" value="gif" style="display: none;">

                <div class="input-group flex-nowrap mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon05">GIF</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gif" id="cover" class="custom-file-input" aria-describedby="inputGroupFileAddon05">
                        <label class="custom-file-label" for="cover">Choose file</label>
                    </div>

                </div>

                <button class="btn btn-success my-3">ADD GIF</button>
            </div>
        </form>

        <hr>

        <h2>ADD MARMOSET</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ route('files.store') }}">
            <div>
                @csrf

                <input type="text" name="work_id" value="{{ $work->id }}" style="display: none;">
                <input type="text" name="type" value="marmoset" style="display: none;">

                <div class="form-row">
                    <div class="form-floating mb-3 col-12">
                        <label for="marmoset">MARMOSET</label>
                        <textarea class="form-control" name="marmoset" id="marmoset" style="height: 100px"></textarea>
                    </div>
                </div>

                <button class="btn btn-success my-3">ADD MARMOSET</button>
            </div>
        </form>

        <hr>

        <h2>ADD VIDEO</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ route('files.store') }}">
            <div>
                @csrf

                <input type="text" name="work_id" value="{{ $work->id }}" style="display: none;">
                <input type="text" name="type" value="video" style="display: none;">

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

                <button class="btn btn-success my-3">ADD VIDEO</button>
            </div>
        </form>

        <hr>

    </div> <!-- /container -->
@endsection

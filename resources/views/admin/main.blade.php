@extends('admin.master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.main.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $page_info->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN</span>
                    </div>
                    <input type="text" name="slogan" id="slogan" value="{{ $page_info->slogan }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $page_info->description }}</textarea>
                </div>

                <div class="form-row">
                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">IMAGE 1</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image_1" id="image_1" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="image_1">Choose file</label>
                        </div>
                    </div>

                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon04">VIDEO</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="video" id="video" class="custom-file-input" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="video">Choose file</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

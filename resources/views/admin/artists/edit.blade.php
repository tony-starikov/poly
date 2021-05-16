@extends('admin.master')

@section('title', 'EDIT ' . $artist->name)

@section('content')
    <div class="container">

        <hr>

        <h1>EDIT ARTIST</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('artists.update', $artist) }}">
            <div>
                @method('PUT')
                @csrf

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME</span>
                        </div>
                        <input type="text" name="name" id="name" value="{{ $artist->name }}" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">CODE</span>
                        </div>
                        <input type="text" name="code" id="code" value="{{ $artist->code }}" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $artist->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">POSITION</span>
                    </div>
                    <input type="text" name="position" id="position" value="{{ $artist->position }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $artist->description }}</textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">IMAGE</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" id="image" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <button class="btn btn-success">EDIT</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

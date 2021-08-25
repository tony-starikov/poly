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

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon02">IMAGE_SQR</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image_sqr" id="image_sqr" class="custom-file-input" aria-describedby="inputGroupFileAddon02">
                        <label class="custom-file-label" for="image_sqr">Choose file</label>
                    </div>
                </div>

{{--                LARGE--}}
                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_top_left_corner</span>
                        </div>
                        <input type="text" name="top_left_corner" id="top_left_corner" value="{{ $artist->top_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_top_right_corner</span>
                        </div>
                        <input type="text" name="top_right_corner" id="top_right_corner" value="{{ $artist->top_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_bottom_left_corner</span>
                        </div>
                        <input type="text" name="bottom_left_corner" id="bottom_left_corner" value="{{ $artist->bottom_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_bottom_right_corner</span>
                        </div>
                        <input type="text" name="bottom_right_corner" id="bottom_right_corner" value="{{ $artist->bottom_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>


                {{--                MIDDLE--}}

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_top_left_corner</span>
                        </div>
                        <input type="text" name="middle_top_left_corner" id="middle_top_left_corner" value="{{ $artist->middle_top_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_top_right_corner</span>
                        </div>
                        <input type="text" name="middle_top_right_corner" id="middle_top_right_corner" value="{{ $artist->middle_top_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_bottom_left_corner</span>
                        </div>
                        <input type="text" name="middle_bottom_left_corner" id="middle_bottom_left_corner" value="{{ $artist->middle_bottom_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_bottom_right_corner</span>
                        </div>
                        <input type="text" name="middle_bottom_right_corner" id="middle_bottom_right_corner" value="{{ $artist->middle_bottom_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                {{--                SMALL--}}

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_top_left_corner</span>
                        </div>
                        <input type="text" name="small_top_left_corner" id="small_top_left_corner" value="{{ $artist->small_top_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_top_right_corner</span>
                        </div>
                        <input type="text" name="small_top_right_corner" id="small_top_right_corner" value="{{ $artist->small_top_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_bottom_left_corner</span>
                        </div>
                        <input type="text" name="small_bottom_left_corner" id="small_bottom_left_corner" value="{{ $artist->small_bottom_left_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_bottom_right_corner</span>
                        </div>
                        <input type="text" name="small_bottom_right_corner" id="small_bottom_right_corner" value="{{ $artist->small_bottom_right_corner }}" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <button class="btn btn-success">EDIT</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

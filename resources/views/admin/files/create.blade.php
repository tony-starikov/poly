@extends('admin.master')

@section('title', 'CREATE')

@section('content')
    <div class="container">

        <hr>

        <h1>CREATE ARTIST</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('artists.store') }}">
            <div>
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
                            <span class="input-group-text" id="addon-wrapping">NAME EN</span>
                        </div>
                        <input type="text" name="name_en" id="name_en" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME UA</span>
                        </div>
                        <input type="text" name="name_ua" id="name_ua" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME RU</span>
                        </div>
                        <input type="text" name="name_ru" id="name_ru" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME DE</span>
                        </div>
                        <input type="text" name="name_de" id="name_de" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>


                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">CODE</span>
                        </div>
                        <input type="text" name="code" id="code" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">POSITION EN</span>
                    </div>
                    <input type="text" name="position_en" id="position_en" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">POSITION UA</span>
                    </div>
                    <input type="text" name="position_ua" id="position_ua" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">POSITION RU</span>
                    </div>
                    <input type="text" name="position_ru" id="position_ru" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">POSITION DE</span>
                    </div>
                    <input type="text" name="position_de" id="position_de" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION EN</label>
                    <textarea class="form-control" name="description_en" id="description_en" style="height: 100px"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION UA</label>
                    <textarea class="form-control" name="description_ua" id="description_ua" style="height: 100px"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION RU</label>
                    <textarea class="form-control" name="description_ru" id="description_ru" style="height: 100px"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION DE</label>
                    <textarea class="form-control" name="description_de" id="description_de" style="height: 100px"></textarea>
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

{{--                LARGE CORNERS--}}
                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_top_left_corner</span>
                        </div>
                        <input type="text" name="top_left_corner" id="top_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_top_right_corner</span>
                        </div>
                        <input type="text" name="top_right_corner" id="top_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_bottom_left_corner</span>
                        </div>
                        <input type="text" name="bottom_left_corner" id="bottom_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">large_bottom_right_corner</span>
                        </div>
                        <input type="text" name="bottom_right_corner" id="bottom_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

{{--                MIDDLE--}}

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_top_left_corner</span>
                        </div>
                        <input type="text" name="middle_top_left_corner" id="middle_top_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_top_right_corner</span>
                        </div>
                        <input type="text" name="middle_top_right_corner" id="middle_top_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_bottom_left_corner</span>
                        </div>
                        <input type="text" name="middle_bottom_left_corner" id="middle_bottom_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">middle_bottom_right_corner</span>
                        </div>
                        <input type="text" name="middle_bottom_right_corner" id="middle_bottom_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

{{--                SMALL--}}

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_top_left_corner</span>
                        </div>
                        <input type="text" name="small_top_left_corner" id="small_top_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_top_right_corner</span>
                        </div>
                        <input type="text" name="small_top_right_corner" id="small_top_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_bottom_left_corner</span>
                        </div>
                        <input type="text" name="small_bottom_left_corner" id="small_bottom_left_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">small_bottom_right_corner</span>
                        </div>
                        <input type="text" name="small_bottom_right_corner" id="small_bottom_right_corner" placeholder="0" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <button class="btn btn-success">CREATE</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

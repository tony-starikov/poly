@extends('admin.master')

@section('title', 'CREATE')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-ARTIST-CREATE</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('artists.store') }}">
            <div>
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">NAME: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">CODE: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code" value="">
                    </div>
                </div>
                <br><div class="input-group row">
                    <label for="title" class="col-sm-2 col-form-label">TITLE: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title" id="title" value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="position" class="col-sm-2 col-form-label">POSITION: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="position" id="position" value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">DESCRIPTION: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72" rows="7">DESCRIPTION</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">IMAGE: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            DOWNLOAD <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">CREATE</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

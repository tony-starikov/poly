@extends('admin.master')

@section('title', 'EDIT ' . $software->name)

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-SOFTWARE-EDIT</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('software.update', $software) }}">
            <div>
                @method('PUT')
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">NAME: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $software->name }}">
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
                <button class="btn btn-success">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

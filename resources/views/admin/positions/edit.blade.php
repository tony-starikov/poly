@extends('admin.master')

@section('title', 'EDIT ' . $position->name)

@section('content')
    <div class="container">

        <hr>

        <h1>EDIT SOFTWARE</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('positions.update', $position) }}">
            <div>
                @method('PUT')
                @csrf

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME</span>
                    </div>
                    <input type="text" name="name" id="name" value="{{ $position->name }}" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION</label>
                        <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $position->description }}</textarea>
                    </div>
                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE</label>
                        <textarea class="form-control" name="software" id="software" style="height: 100px">{{ $position->software }}</textarea>
                    </div>
                </div>

                <button class="btn btn-success">EDIT</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

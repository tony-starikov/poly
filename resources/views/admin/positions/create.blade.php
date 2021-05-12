@extends('admin.master')

@section('title', 'ADD POSITION')

@section('content')
    <div class="container">

        <hr>

        <h1>ADD POSITION</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('positions.store') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME</span>
                    </div>
                    <input type="text" name="name" id="name" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION</label>
                        <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                    </div>
                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE</label>
                        <textarea class="form-control" name="software" id="software" style="height: 100px"></textarea>
                    </div>
                </div>

                <button class="btn btn-success">CREATE</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

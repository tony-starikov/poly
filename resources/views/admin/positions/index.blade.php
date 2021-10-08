@extends('admin.master')

@section('title', 'ADMIN-POSITIONS')

@section('content')
    <div class="container">

        <hr>

        <h1>POSITIONS</h1>

        <hr>

        <a class="btn btn-success" type="button" href="{{ route('positions.create') }}">ADD POSITION</a>

        <hr>

        <div class="row">
            @foreach($positions as $position)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p>{{ $position->name_en }}</p>
                            <p class="card-text">{{ $position->description_en }}</p>
                            <p class="card-text">{{ $position->software_en }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('positions.show', $position) }}"><button type="button" class="btn btn-link">SHOW</button></a>
                                    <a href="{{ route('positions.edit', $position) }}"><button type="button" class="btn btn-link">EDIT</button></a>
                                </div>
                                <form id="delete-form" action="{{ route('positions.destroy', $position) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div> <!-- /container -->
@endsection

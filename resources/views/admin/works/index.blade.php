@extends('admin.master')

@section('title', 'ADMIN-WORKS')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-WORKS</h1>

        <hr>

        <a class="btn btn-success" type="button" href="{{ route('works.create') }}">ADD WORK</a>

        <hr>

        <div class="row">
            @foreach($works as $work)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="http://via.placeholder.com/640x360" alt="Card image cap">
                        <div class="card-body">
                            <p>id: {{ $work->id }} | name: {{ $work->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('works.show', $work) }}"><button type="button" class="btn btn-link">SHOW</button></a>
                                    <a href="{{ route('works.edit', $work) }}"><button type="button" class="btn btn-link">EDIT</button></a>
                                </div>
                                <form id="delete-form" action="{{ route('works.destroy', $work) }}" method="POST">
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

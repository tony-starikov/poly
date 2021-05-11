@extends('admin.master')

@section('title', 'ADMIN-ARTISTS')

@section('content')
    <div class="container">

        <hr>

        <h1>ARTISTS</h1>

        <hr>

        <a class="btn btn-success" type="button" href="{{ route('artists.create') }}">ADD ARTIST</a>

        <hr>

        <div class="row">
            @foreach($artists as $artist)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="http://via.placeholder.com/640x360" alt="Card image cap">
                        <div class="card-body">
                            <p>id: {{ $artist->id }} | name: {{ $artist->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('artists.show', $artist) }}"><button type="button" class="btn btn-link">SHOW</button></a>
                                    <a href="{{ route('artists.edit', $artist) }}"><button type="button" class="btn btn-link">EDIT</button></a>
                                </div>
                                <form id="delete-form" action="{{ route('artists.destroy', $artist) }}" method="POST">
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

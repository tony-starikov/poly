@extends('admin.master')

@section('title', 'ADMIN-ARTISTS')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-ARTISTS</h1>

        <hr>

        <a class="btn btn-success" type="button" href="{{ route('artists.create') }}">ADD ARTIST</a>

        @foreach($artists as $artist)
            <p>
                id: {{ $artist->id }} | name: {{ $artist->name }}
                <a href="{{ route('artists.show', $artist) }}"><button type="button" class="btn btn-link">SHOW</button></a>
                <a href="{{ route('artists.edit', $artist) }}"><button type="button" class="btn btn-link">EDIT</button></a>
            </p>
            <form id="delete-form" action="{{ route('artists.destroy', $artist) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-primary">DELETE</button>
            </form>
        @endforeach

    </div> <!-- /container -->
@endsection

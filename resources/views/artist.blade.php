@extends('master')

@section('title', 'ARTIST | POLYGONERDS')

@section('content')
    <div class="container">

        <hr>

        <h1>ARTIST-NAME: {{ $artist->name }}</h1>

        @foreach($artist->works as $work)
            <h1>{{ $work->name }}</h1>
        @endforeach

        <hr>

    </div> <!-- /container -->
@endsection

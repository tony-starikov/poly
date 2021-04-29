@extends('master')

@section('title', "WORK | $work->name | POLYGONERDS")

@section('content')
    <div class="container">

        <hr>

        <h1>WORK-NAME: {{ $work->name }}</h1>

        @foreach($work->software as $soft)
            <h2>{{ $soft->name }}</h2>
        @endforeach

        @foreach($work->artists as $artist)
            <h2>{{ $artist->name }}</h2>
        @endforeach

        <hr>

    </div> <!-- /container -->
@endsection

@extends('master')

@section('title', 'ARTISTS | POLYGONERDS')

@section('content')
    <div class="container">

        <hr>

        <h1>ARTISTS</h1>

        <hr>

        <div class="row">
            @foreach($artists as $artist)
                @include('artist-card', compact('artist'))
            @endforeach
        </div>
    </div>
@endsection

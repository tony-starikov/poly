@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>ARTISTS</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>

        <hr>

        <div class="row">
            @foreach($artists as $artist)
                @include('artist-card', compact('artist'))
            @endforeach
        </div>
    </div>
@endsection

@extends('master')

@section('title', $abouts->title)

@section('content')
    <div class="container">

        <hr>

        <h1>ABOUT</h1>

        <p>title: {{ $abouts->title }}</p>
        <p>description: {{ $abouts->description }}</p>
        <p>company_name: {{ $abouts->company_name }}</p>
        <p>location: {{ $abouts->location }}</p>
        <p>establishment: {{ $abouts->establishment }}</p>
        <p>employee: {{ $abouts->employee }}</p>
        <p>ceo: {{ $abouts->ceo }}</p>
        <p>director: {{ $abouts->director }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

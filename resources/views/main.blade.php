@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>slogan: {{ $page_info->slogan }}</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

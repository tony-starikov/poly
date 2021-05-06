@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>ABOUT</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>
        <p>company_name: {{ $page_info->company_name }}</p>
        <p>location: {{ $page_info->location }}</p>
        <p>establishment: {{ $page_info->establishment }}</p>
        <p>employee: {{ $page_info->employee }}</p>
        <p>ceo: {{ $page_info->ceo }}</p>
        <p>director: {{ $page_info->director }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

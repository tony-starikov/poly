@extends('master')

@section('title', $recruits->title)

@section('content')
    <div class="container">

        <hr>

        <h1>RECRUIT</h1>

        <p>title: {{ $recruits->title }}</p>
        <p>description: {{ $recruits->description }}</p>
        <p>email_link: {{ $recruits->email_link }}</p>
        <p>job_description: {{ $recruits->job_description }}</p>
        <p>recruiting_process: {{ $recruits->recruiting_process }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

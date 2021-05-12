@extends('admin.master')

@section('title', 'SHOW ' . $position->name)

@section('content')
    <div class="container">

        <hr>

        <h1>SHOW POSITION</h1>

        <hr>

        <h2>name: {{ $position->name }}</h2>

        <h2>id: {{ $position->id }}</h2>

        <p>description: {{ $position->description }}</p>

        <p>software: {{ $position->software }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

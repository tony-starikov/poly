@extends('admin.master')

@section('title', 'SHOW ' . $artist->name)

@section('content')
    <div class="container">

        <hr>

        <h1>SHOW ARTIST</h1>

        <hr>

        <img src="{{ Storage::url($artist->image) }}" alt="{{ $artist->name }}" class="img-fluid">

        <h2>name: {{ $artist->name }}</h2>

        <h2>id: {{ $artist->id }}</h2>

        <hr>

    </div> <!-- /container -->
@endsection

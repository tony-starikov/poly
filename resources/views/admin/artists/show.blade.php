@extends('admin.master')

@section('title', 'SHOW ' . $artist->name)

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-ARTIST-SHOW</h1>

        <hr>

        <h2>id: {{ $artist->id }} | name: {{ $artist->name }}</h2>

        <img src="{{ Storage::url($artist->image) }}" alt="{{ $artist->name }}">

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title', 'SHOW ' . $software->name)

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-SOFTWARE-SHOW</h1>

        <hr>

        <h2>id: {{ $software->id }} | name: {{ $software->name }}</h2>

        <img src="{{ Storage::url($software->image) }}" alt="{{ $software->name }}" height="50px">

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title', 'SHOW ' . $work->name)

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-WORK-SHOW</h1>

        <hr>

        <h2>id: {{ $work->id }} | name: {{ $work->name }}</h2>

        <img src="{{ Storage::url($work->image_1) }}" alt="{{ $work->name }}">

        <hr>

        @foreach($work->software as $soft)
            <p>{{ $soft->name }}</p>
        @endforeach

        <hr>

        @foreach($work->artists as $artist)
            <p>{{ $artist->name }}</p>
        @endforeach

    </div> <!-- /container -->
@endsection

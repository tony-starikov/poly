@extends('admin.master')

@section('title', 'SHOW ' . $work->name)

@section('content')
    <div class="container">

        <hr>

        <h1>SHOW WORK</h1>

        <hr>

        <img src="{{ Storage::url($work->image_1) }}" alt="{{ $work->name }}" class="img-fluid">

        <h2>name: {{ $work->name }}</h2>

        <h2>id: {{ $work->id }}</h2>

        <hr>

        <ul class="list-group list-group-horizontal">
            @foreach($work->software as $soft)
                <li class="list-group-item">{{ $soft->name }}</li>
            @endforeach
        </ul>

        <hr>

        <ul class="list-group list-group-horizontal">
            @foreach($work->artists as $artist)
                <li class="list-group-item">{{ $artist->name }}</li>
            @endforeach
        </ul>

        <hr>
    </div> <!-- /container -->
@endsection

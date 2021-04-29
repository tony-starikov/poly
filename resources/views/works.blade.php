@extends('master')

@section('title', 'WORKS | POLYGONERDS')

@section('content')
    <div class="container">

        <hr>

        <h1>WORKS</h1>

        <hr>

        <div class="row">
            @foreach($works as $work)
                @include('work-card', ['work' => $work])
            @endforeach
        </div>
    </div>
@endsection

@extends('master')

@section('title', 'ARTISTS | POLYGONERDS')

@section('content')
    <div class="container">

        <hr>

        <h1>ARTISTS</h1>

        <hr>

        <div class="row">
            @include('artist-card')
        </div>
    </div>
@endsection

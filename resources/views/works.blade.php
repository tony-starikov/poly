@extends('master')

@section('title', 'WORKS | POLYGONERDS')

@section('content')
    <div class="container">

        <hr>

        <h1>WORKS</h1>

        <hr>

        <div class="row">
            @include('work-card')
        </div>
    </div>
@endsection

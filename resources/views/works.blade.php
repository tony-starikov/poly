@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>WORKS</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>

        <hr>

        <div class="row">
            @foreach($works as $work)
                @include('work-card', ['work' => $work])
            @endforeach
        </div>
    </div>
@endsection

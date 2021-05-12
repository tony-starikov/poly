@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>RECRUIT</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>
        <p>email_link: {{ $page_info->email_link }}</p>
        <p>jobs_description: {{ $page_info->jobs_description }}</p>
        <p>recruiting_process: {{ $page_info->recruiting_process }}</p>

        <hr>

        <div class="row">
            @foreach($positions as $position)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p>{{ $position->name }}</p>
                            <p class="card-text">{{ $position->description }}</p>
                            <p class="card-text">{{ $position->software }}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div> <!-- /container -->
@endsection

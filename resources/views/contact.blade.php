@extends('master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>CONTACT</h1>

        <p>title: {{ $page_info->title }}</p>
        <p>description: {{ $page_info->description }}</p>
        <p>company_name: {{ $page_info->company_name }}</p>
        <p>location: {{ $page_info->location }}</p>
        <p>email: {{ $page_info->email }}</p>
        <p>social_1: {{ $page_info->social_1 }}</p>
        <p>social_2: {{ $page_info->social_2 }}</p>
        <p>social_3: {{ $page_info->social_3 }}</p>
        <p>social_4: {{ $page_info->social_4 }}</p>
        <p>social_5: {{ $page_info->social_5 }}</p>
        <p>social_6: {{ $page_info->social_6 }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

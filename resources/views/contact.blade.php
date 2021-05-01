@extends('master')

@section('title', $contacts->title)

@section('content')
    <div class="container">

        <hr>

        <h1>CONTACT</h1>

        <p>title: {{ $contacts->title }}</p>
        <p>description: {{ $contacts->description }}</p>
        <p>company_name: {{ $contacts->company_name }}</p>
        <p>location: {{ $contacts->location }}</p>
        <p>email: {{ $contacts->email }}</p>
        <p>social_1: {{ $contacts->social_1 }}</p>
        <p>social_2: {{ $contacts->social_2 }}</p>
        <p>social_3: {{ $contacts->social_3 }}</p>
        <p>social_4: {{ $contacts->social_4 }}</p>
        <p>social_5: {{ $contacts->social_5 }}</p>
        <p>social_6: {{ $contacts->social_6 }}</p>

        <hr>

    </div> <!-- /container -->
@endsection

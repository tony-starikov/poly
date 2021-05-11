@extends('admin.master')

@section('title', 'ADMIN')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN</h1>

        @auth()
        <form id="logout-form" action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        @endauth

        <hr>

    </div> <!-- /container -->
@endsection

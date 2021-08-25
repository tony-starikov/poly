@extends('admin.master')

@section('title', 'ADMIN')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN</h1>

        @if(session()->has("message"))
            <div class="alert alert-success">
                <p> {{session("message")}} </p>
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
        <form class="mb-3" action="{{ route('admin.change.password') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="image"><strong>Change Password:</strong></label>
                <input type="password" class="form-control" id="password" placeholder="New Password" name="password" required>
                <input type="password" name="objectId" value="{{ encrypt(Auth::user()->id) }}" style="display: none;">
            </div>
            <button type="submit" class="btn btn-warning">Change Password</button>
        </form>

        <form class="mb-3" action="{{ route('admin.change.email') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="image"><strong>Change Email:</strong></label>
                <input type="email" class="form-control" id="email" placeholder="New Email" name="email" required>
                <input type="password" name="objectId" value="{{ encrypt(Auth::user()->id) }}" style="display: none;">
            </div>
            <button type="submit" class="btn btn-warning">Change Email</button>
        </form>

        @auth()
        <form class="mb-3" id="logout-form" action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        @endauth

        <hr>

    </div> <!-- /container -->
@endsection

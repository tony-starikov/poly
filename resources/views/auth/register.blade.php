@extends('master')

@section('title', 'REGISTER')

@section('content')
    <div class="row justify-content-center my-2">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPasswordConfirm" class="form-label">Password confirm</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirm">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

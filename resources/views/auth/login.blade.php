@extends('master')

@section('title', 'LOGIN')

@section('main')
    <!--Main layout-->
    <main class="my-4 p-2 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary m-3">Submit</button>
                        </form>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

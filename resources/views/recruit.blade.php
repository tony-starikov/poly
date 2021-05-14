@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-2 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row">

                    <img src="https://picsum.photos/id/870/1000/160?grayscale&blur=2" alt="" class="img-fluid w-100">

                    <p class="mt-2">{{ $page_info->description }} <a class="text-white" href = "mailto: {{ $page_info->email }}">{{ $page_info->email }}</a></p>
                </div>

                <hr>

            </section>

            <section class="text-center">
                <h4><strong>Positions Available</strong></h4>

                <div class="row">

                    @foreach($positions as $position)
                        <div class="col-lg-4 col-md-12 mb-4 text-dark">

                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $position->name }}</h5>
                                    <p class="card-text">{{ $position->description }}</p>
                                    <p class="card-text">{{ $position->software }}</p>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>

                <hr>

            </section>

            <section class="text-center">

                <h4><strong>Jobs Description</strong></h4>

                <div class="row m-2 text-center">
                    <div class="col"><h4>Employment status: permanent employee</h4></div>
                </div>

                <div class="row m-2 text-center">
                    <div class="col"><h4>Location: Chernyshevska St, 66, Kharkiv</h4></div>
                </div>

                <div class="row m-2 text-center">
                    <div class="col"><h4>Salary, benefits: negotiable; flexible work hours; cookies</h4></div>
                </div>

                <div class="row m-2 text-center">
                    <div class="col"><h4>Workdays/Holidays: 2 full days off a week; summer holiday; new year holiday; wedding and funeral leave</h4></div>
                </div>

                <hr>

            </section>

            <section class="text-center">

                <h4><strong>Recruiting process</strong></h4>

                <p>
                    <strong>1. Application via email</strong> ->
                    <strong>2. First interview</strong> ->
                    <strong>3. One month probation period</strong> ->
                    <strong>4. Final interview</strong>
                </p>

                <small>applicant will be informed regardless of the outcome</small>

                <hr>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

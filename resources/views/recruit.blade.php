@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-dark" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-3" style="background-color: rgba(255, 255, 255, 0.80);border-radius: 25px;">

                    <img src="https://picsum.photos/id/870/1000/160?grayscale&blur=2" alt="" class="img-fluid w-100" style="border-radius: 10px;" />

                    <p class="mt-2">{{ $page_info->description }} <a class="text-dark" href = "mailto: {{ $page_info->email }}">{{ $page_info->email }}</a></p>

                    <hr>

                    <h4><strong>Positions Available</strong></h4>

                    @foreach($positions as $position)
                        <div class="col-lg-4 col-md-12 mb-4 text-dark">

                            <div class="card" style="border-radius: 10px;">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $position->name }}</h5>
                                    <p class="card-text">{{ $position->description }}</p>
                                    <p class="card-text">{{ $position->software }}</p>
                                </div>

                            </div>

                        </div>
                    @endforeach

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

                    <h4><strong>Recruiting process</strong></h4>

                    <p>
                        <strong>1. Application via email</strong> ->
                        <strong>2. First interview</strong> ->
                        <strong>3. One month probation period</strong> ->
                        <strong>4. Final interview</strong>
                    </p>

                    <small>applicant will be informed regardless of the outcome</small>

                    <hr>

                </div>



            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-dark" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row d-flex justify-content-center" style="background-color: rgba(255, 255, 255, 0.80);border-radius: 25px;">

                    <img src="https://picsum.photos/id/870/1000/160?grayscale&blur=2" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">

                    <div class="row d-flex justify-content-center">
                        <div class="col-12 mx-5">

                            <p class="h5 mx-5 mt-4">
                                {{ $page_info->description }} <u><a class="text-dark" href = "mailto: {{ $page_info->email }}">{{ $page_info->email }}</a></u>
                            </p>

                        </div>
                    </div>

                    <hr size="5" class="w-50 my-2">

                    <h2 class="mb-2 fw-bolder">Positions Available</h2>

                    <div class="row w-75">
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
                    </div>

                    <h2 class="mb-2 fw-bolder">Jobs Description</h2>

                    <div class="row w-75 justify-content-center">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Employment status: </h5></div>
                        <div class="col-6 text-start"><h5>permanent employee</h5></div>
                    </div>

                    <div class="row w-75 justify-content-center">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Location: </h5></div>
                        <div class="col-6 text-start"><h5>Location: Chernyshevska St, 66, Kharkiv</h5></div>
                    </div>

                    <div class="row w-75 justify-content-center">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Salary, benefits: </h5></div>
                        <div class="col-6 text-start"><h5>negotiable; flexible work hours; cookies</h5></div>
                    </div>

                    <div class="row w-75 justify-content-center">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Workdays/Holidays: </h5></div>
                        <div class="col-6 text-start"><h5>2 full days off a week; summer holiday; new year holiday; wedding and funeral leave</h5></div>
                    </div>

                    <hr size="5" class="w-50 my-2">

                    <h2 class="mb-2 fw-bolder">Recruiting process</h2>

                    <ul class="list-inline">
                        <li class="list-inline-item">1. Application via email</li>
                        <li class="list-inline-item">-> 2. First interview</li>
                        <li class="list-inline-item">-> 3. One month probation period</li>
                        <li class="list-inline-item">-> 4. Final interview</li>
                    </ul>

                    <small class="fw-bolder">applicant will be informed regardless of the outcome</small>

                    <hr size="3" class="w-50 my-2">

                </div>



            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

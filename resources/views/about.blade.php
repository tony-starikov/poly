@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row d-flex justify-content-center" style="background-color: rgba(0, 0, 0, 0.70);border-radius: 25px;">

                    <img src="https://picsum.photos/id/870/1000/160?grayscale&blur=2" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">

                    <div class="row d-flex justify-content-center">
                        <div class="col-12 mx-5">

                            <p class="h5 mx-5 mt-4">
                                {{ $page_info->description }}
                            </p>

                        </div>
                    </div>

                    <hr size="5" class="w-50 my-2">

                    <h2 class="fw-bolder">Company Profile</h2>


                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Company name: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->company_name }}</h5></div>
                    </div>

                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Location: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->location_text }}</h5></div>
                    </div>

                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Establishment: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->establishment }}</h5></div>
                    </div>

                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Employee: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->employee }}</h5></div>
                    </div>

                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">CEO: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->ceo }}</h5></div>
                    </div>

                    <div class="row w-75 mx-5">
                        <div class="col-3 text-start"><h5 class="fw-bolder">Director: </h5></div>
                        <div class="col-6 text-start"><h5>{{ $page_info->director }}</h5></div>
                    </div>

                    <hr size="5" class="w-50 mb-4" style="color: rgb(250,250,250);">

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-3" style="background-color: rgba(0, 0, 0, 0.70);border-radius: 25px;">

                    <img src="https://picsum.photos/id/870/1000/160?grayscale&blur=2" alt="" class="img-responsive w-100">
                    <p class="mt-2">
                        {{ $page_info->description }}
                    </p>
                    <hr>
                    <h2>Company Profile</h2>
                    <div class="row m-2 text-center">
                        <div class="col"><h4>Company name: {{ $page_info->company_name }}</h4></div>
                    </div>

                    <div class="row m-2 text-center">
                        <div class="col"><h4>Location: {{ $page_info->location }}</h4></div>
                    </div>

                    <div class="row m-2 text-center">
                        <div class="col"><h4>Establishment: {{ $page_info->establishment }}</h4></div>
                    </div>

                    <div class="row m-2 text-center">
                        <div class="col"><h4>Employee: {{ $page_info->employee }}</h4></div>
                    </div>

                    <div class="row m-2 text-center">
                        <div class="col"><h4>CEO: {{ $page_info->ceo }}</h4></div>
                    </div>

                    <div class="row m-2 text-center">
                        <div class="col"><h4>Director: {{ $page_info->director }}</h4></div>
                    </div>

                    <hr>

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

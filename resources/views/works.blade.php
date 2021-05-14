@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-2 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row">

                    @foreach($works as $work)
                        <div class="col-lg-4 col-md-6 my-2">

                            <a href="{{ route('work', $work->code) }}">
                                <div class="card">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="{{ Storage::url($work->image_1) }}" class="img-fluid" />
                                    </div>
                                    <div class="card-img-overlay text-white d-flex align-items-end justify-content-center">
                                        <h5 class="card-title">{{ $work->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>


                    @endforeach

                </div>

            </section>
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->
@endsection

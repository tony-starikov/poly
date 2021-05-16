@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-1" style="background-color: rgba(0, 0, 0, 0.90);border-radius: 25px;">

                    @foreach($artists as $artist)
                        <div class="col-lg-3 col-md-6 my-2">

                            <a href="{{ route('artist', $artist->code) }}">
                                <div class="card bg-dark border border-dark p-0"  style="border-radius: 10px;">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="{{ Storage::url($artist->image) }}" class="img-fluid" style="border-radius: 10px;" />
                                    </div>
                                    <div class="card-img-overlay text-white d-flex align-items-end justify-content-center">
                                        <h5 class="card-title">{{ $artist->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

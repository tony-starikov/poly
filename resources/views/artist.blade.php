@extends('master')

@section('title', 'ARTIST | ' . $artist->name)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-2 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row">
                    <div class="col-md-8">
                        <h1>
                            {{ $artist->name }}
                        </h1>

                        <hr>

                        <h2>
                            {{ $artist->position }}
                        </h2>

                        <hr>

                        <p>{{ $artist->description }}</p>

                        <hr>

                        <p>{{ $artist->social }}</p>

                        <hr>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img
                                src="{{ Storage::url($artist->image) }}"
                                class="card-img img-responsive"
                                alt="..."
                            />
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <h2>WORKS</h2>

                    <hr>

                    @foreach($artist->works as $work)
                        <div class="col-lg-4 col-md-6 my-2">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                                    <a href="{{ route('work', $work->code) }}">
                                        <img src="{{ Storage::url($work->image_1) }}" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="card-img-overlay text-white">
                                    <a class="text-dark" href="{{ route('work', $work->code) }}">
                                        <h5 class="card-title">{{ $work->name }}</h5>
                                        <p class="card-text">
                                            Card description.
                                        </p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

@extends('master')

@section('title', 'ARTIST | ' . $artist->name)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-2" style="background-color: rgba(0, 0, 0, 0.70);border-radius: 25px 25px 0 0;">
                    <div class="col-md-8 p-2">
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

                    <div class="col-md-4 p-2">
                        <div class="card" style="border-radius: 5px;">
                            <img
                                src="{{ Storage::url($artist->image) }}"
                                class="card-img img-fluid"
                                alt="..."
                                style="border-radius: 5px;"
                            />
                        </div>
                    </div>

                </div>

                <div class="row p-2" data-masonry='{"percentPosition": true }' style="background-color: rgba(0, 0, 0, 0.70);border-radius: 0 0 25px 25px;">

                    <h2>WORKS</h2>

                    @foreach($artist->works as $work)

                        <div class="col-lg-3 col-md-6 p-2" style="border-radius: 5px;">

                            <a href="{{ route('work', $work->code) }}">
                                <div class="card bg-dark my-card" style="border-radius: 5px;">
                                    <img src="{{ Storage::url($work->image_1) }}" class="img-fluid" style="border-radius: 5px;" />
                                    <div class="my-overlay" style="border-radius: 5px;">{{ $work->name }}</div>
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

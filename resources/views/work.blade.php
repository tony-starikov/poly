@extends('master')

@section('title', "WORK | $work->name")

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-2" style="background-color: rgba(0, 0, 0, 0.90);border-radius: 25px;">

                    <div class="col-md-8 mt-2">
                        <img
                            src="{{ Storage::url($work->image_1) }}"
                            alt="..."
                            width="100%"
                        />
                        <hr>

                        <img
                            src="{{ Storage::url($work->image_1) }}"
                            alt="..."
                            width="100%"
                        />
                        <hr>

                        <img
                            src="{{ Storage::url($work->image_1) }}"
                            alt="..."
                            width="100%"
                        />
                        <hr>

                        <iframe width='100%' height='480px' src='https://www.artstation.com/embed/665067' frameborder='0' allowfullscreen mozallowfullscreen='true' webkitallowfullscreen='true' onmousewheel='true' scrolling='no'></iframe>

                    </div>

                    <div class="col-md-4 mt-2">
                        <h1>{{ $work->name }}</h1>

                        <p>
                            {{ $work->description }}
                        </p>

                        <hr>
                        <h2>Artists</h2>
                        @foreach($work->artists as $artist)
                            <figure class="figure">
                                <img
                                    src="{{ Storage::url($artist->image) }}"
                                    class="figure-img img-fluid rounded shadow-3 mb-3"
                                    alt="..."
                                    width="50px"
                                />
                                <figcaption class="figure-caption">{{ $artist->name }}</figcaption>
                            </figure>
                        @endforeach

                        <hr>

                        <h3>Software Used</h3>

                        @foreach($work->software as $soft)
                            <figure class="figure">
                                <img
                                    src="{{ Storage::url($soft->image) }}"
                                    class="figure-img img-fluid rounded shadow-3 mb-3"
                                    alt="..."
                                    width="50px"
                                />
                                <figcaption class="figure-caption">{{ $soft->name }}</figcaption>
                            </figure>
                        @endforeach

                    </div>

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

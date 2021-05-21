@extends('master')

@section('title', "WORK | $work->name")

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-2" style="background-color: rgba(0, 0, 0, 0.9);border-radius: 25px;">

                    <div class="col-md-8 p-0" style="background-color: rgba(0, 0, 0, 0.1);border-radius: 25px;">
                        <img
                            src="{{ Storage::url($work->image_1) }}"
                            alt="..."
                            width="100%"
                            style="border-radius: 25px 0 0 0;"
                            class="mb-1"
                        />

                        <video class="mb-1"
                               width="100%"
                               height="auto"
                               controls="controls"
{{--                               poster="/images/ocean.jpg"--}}
                               loop autoplay>
                            <source src="{{ Storage::url($work->video_mp4) }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            <source src="{{ Storage::url($work->video_webm) }}" type='video/webm; codecs="vp8, vorbis"'>
                            Video error
                        </video>

                        <img
                            src="{{ Storage::url($work->image_2) }}"
                            alt="..."
                            width="100%"
                            class="mb-1"
                        />

                        <iframe
                            width='100%'
                            height='400px'
                            src='{{ $work->marmoset }}'
                            frameborder='0' allowfullscreen
                            mozallowfullscreen='true'
                            webkitallowfullscreen='true'
                            onmousewheel='true'
                            scrolling='no'>
                        </iframe>

                        <img
                            src="{{ Storage::url($work->image_3) }}"
                            alt="..."
                            width="100%"
                            style="background-color: rgba(0, 0, 0, 0.90);border-radius: 0 0 0 25px;"
                            class="mb-1"
                        />

                    </div>

                    <div class="col-md-4 p-3 text-start" style="background-color: rgba(0,0,0,0.01);border-radius: 0 25px 25px 0;">

                        <section class="sticky-top" style="background-color: rgba(0,0,0,0.01);border-radius: 0 25px 25px 0;">
                            <h2>Artists</h2>
                            @foreach($work->artists as $artist)
                                <figure class="figure">
                                    <a href="{{ route('artist', $artist->code) }}">
                                        <div class="card my-card" style="border-radius: 10px;">
                                            <img src="{{ Storage::url($artist->image) }}"
                                                 class="img-fluid"
                                                 style="border-radius: 10px;"
                                                 width="100px"
                                            />
                                            <div class="my-overlay"><small style="font-size: 15px;">{{ $artist->name }}</small></div>
                                        </div>
                                    </a>
                                </figure>


                            @endforeach

                            <hr size="5" class="w-50">

                            <h1>{{ $work->name }}</h1>

                            <p>
                                {{ $work->description }}
                            </p>

                            <hr size="5" class="w-50">

                            <h2>Software Used</h2>

                            @foreach($work->software as $soft)
                                <figure class="figure m-1">
                                    <img
                                        src="{{ Storage::url($soft->image) }}"
                                        class="figure-img img-fluid rounded shadow-3 mb-3"
                                        alt="..."
                                        width="50px"
                                    />
                                    <figcaption class="figure-caption">{{ $soft->name }}</figcaption>
                                </figure>
                            @endforeach

                        </section>



                    </div>

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

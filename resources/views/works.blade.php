@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-0" data-masonry='{"percentPosition": true }' style="background-color: rgba(0,0,0,1);;border-radius: 10px;">
                    @foreach($works as $work)

                        <div class="col-lg-4 col-md-6 p-2" style="border-radius: 5px;">

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
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->
@endsection

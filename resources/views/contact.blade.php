@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-start">

                <div class="row" style="background-color: rgba(0, 0, 0, 0.70);border-radius: 25px;">

                    <div class="col-md-4 p-3 my-5">

                        <div class="row my-2">
                            <div class="col-12">
                                <h1 class="mb-2 fw-bolder">Contact Us</h1>
                                <hr size="5" class="w-25 my-2">

                                <p>{{ $page_info->company_name }}</p>
                                <p>{{ $page_info->location_text }}</p>

                                <hr size="5" class="w-25 my-2">

                                <a class="text-white" href = "mailto: {{ $page_info->email }}">E-mail: {{ $page_info->email }}</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <a class="text-white" href="{{ $page_info->social_1 }}"><i class="fab fa-telegram fa-4x m-1"></i></a>
                                <a class="text-white" href="{{ $page_info->social_2 }}"><i class="fab fa-artstation fa-4x m-1"></i></a>
                                <a class="text-white" href="{{ $page_info->social_3 }}"><i class="fab fa-instagram fa-4x m-1"></i></a>
                                <a class="text-white" href="{{ $page_info->social_4 }}"><i class="fab fa-linkedin fa-4x m-1"></i></a>
                                <a class="text-white" href="{{ $page_info->social_5 }}"><i class="fab fa-facebook fa-4x m-1"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8 p-0 m-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2737549872563!2d36.23957601571529!3d50.00622397941642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dc47438cc1%3A0xf22dc050706eb082!2z0LLRg9C70LjRhtGPINCn0LXRgNC90LjRiNC10LLRgdGM0LrQsCwgNjYsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1suk!2sua!4v1621517762524!5m2!1suk!2sua" width="100%" height="100%" style="border-radius: 0 25px 25px 0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

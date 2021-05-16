@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-4 p-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row p-3" style="background-color: rgba(0, 0, 0, 0.70);border-radius: 25px;">

                    <div class="col-md-4 p-2">
                        <h1>Contact Us</h1>
                        <hr>
                        <p>{{ $page_info->company_name }}</p>
                        <p>{{ $page_info->location }}</p>
                        <hr>
                        <a class="text-white" href = "mailto: {{ $page_info->email }}">{{ $page_info->email }}</a>
                        <hr>
                        <a class="text-white" href="{{ $page_info->social_1 }}"><i class="fab fa-telegram fa-4x m-1"></i></a>
                        <a class="text-white" href="{{ $page_info->social_2 }}"><i class="fab fa-artstation fa-4x m-1"></i></a>
                        <a class="text-white" href="{{ $page_info->social_3 }}"><i class="fab fa-instagram fa-4x m-1"></i></a>
                        <a class="text-white" href="{{ $page_info->social_4 }}"><i class="fab fa-linkedin fa-4x m-1"></i></a>
                        <a class="text-white" href="{{ $page_info->social_5 }}"><i class="fab fa-facebook fa-4x m-1"></i></a>
                    </div>

                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2737549872563!2d36.23957601571529!3d50.00622397941642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dc47438cc1%3A0xf22dc050706eb082!2sChernyshevska%20St%2C%2066%2C%20Kharkiv%2C%20Kharkivs&#39;ka%20oblast%2C%2061000!5e0!3m2!1sen!2sua!4v1620995207666!5m2!1sen!2sua" width="100%" height="700" style="border:0; margin: 0; padding: 0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection

@extends('admin.master')

@section('title', 'admin | ' . $page_info->name)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.contact.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_contact_us_en</span>
                    </div>
                    <input type="text" name="field_contact_us_en" id="field_contact_us_en" value="{{ $page_info->field_contact_us_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_contact_us_ua</span>
                    </div>
                    <input type="text" name="field_contact_us_ua" id="field_contact_us_ua" value="{{ $page_info->field_contact_us_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_contact_us_ru</span>
                    </div>
                    <input type="text" name="field_contact_us_ru" id="field_contact_us_ru" value="{{ $page_info->field_contact_us_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_contact_us_de</span>
                    </div>
                    <input type="text" name="field_contact_us_de" id="field_contact_us_de" value="{{ $page_info->field_contact_us_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $page_info->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION EN</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $page_info->description }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME EN</span>
                    </div>
                    <input type="text" name="company_name_en" id="company_name_en" value="{{ $page_info->company_name_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME UA</span>
                    </div>
                    <input type="text" name="company_name_ua" id="company_name_ua" value="{{ $page_info->company_name_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME RU</span>
                    </div>
                    <input type="text" name="company_name_ru" id="company_name_ru" value="{{ $page_info->company_name_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME DE</span>
                    </div>
                    <input type="text" name="company_name_de" id="company_name_de" value="{{ $page_info->company_name_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION EN</span>
                    </div>
                    <input type="text" name="location_text_en" id="location_text_en" value="{{ $page_info->location_text_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION UA</span>
                    </div>
                    <input type="text" name="location_text_ua" id="location_text_ua" value="{{ $page_info->location_text_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION RU</span>
                    </div>
                    <input type="text" name="location_text_ru" id="location_text_ru" value="{{ $page_info->location_text_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION DE</span>
                    </div>
                    <input type="text" name="location_text_de" id="location_text_de" value="{{ $page_info->location_text_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">EMAIL</span>
                    </div>
                    <input type="text" name="email" id="email" value="{{ $page_info->email }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TELEGRAM</span>
                    </div>
                    <input type="text" name="social_1" id="social_1" value="{{ $page_info->social_1 }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">ARTSTATION</span>
                    </div>
                    <input type="text" name="social_2" id="social_2" value="{{ $page_info->social_2 }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">INSTAGRAM</span>
                    </div>
                    <input type="text" name="social_3" id="social_3" value="{{ $page_info->social_3 }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">LINKEDIN</span>
                    </div>
                    <input type="text" name="social_4" id="social_4" value="{{ $page_info->social_4 }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">FACEBOOK</span>
                    </div>
                    <input type="text" name="social_5" id="social_5" value="{{ $page_info->social_5 }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">MAP LINK</span>
                    </div>
                    <input type="text" name="map_src" id="map_src" value="{{ $page_info->map_src }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

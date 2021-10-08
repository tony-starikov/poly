@extends('admin.master')

@section('title', 'CONTACT')

@section('content')
    <div class="container">

        <hr>

        <h1>CONTACT</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.contact.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_us_en</span>
                    </div>
                    <input type="text" name="contact_us_en" id="contact_us_en" value="{{ $fields['contact_us_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_us_ua</span>
                    </div>
                    <input type="text" name="contact_us_ua" id="contact_us_ua" value="{{ $fields['contact_us_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_us_ru</span>
                    </div>
                    <input type="text" name="contact_us_ru" id="contact_us_ru" value="{{ $fields['contact_us_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_us_de</span>
                    </div>
                    <input type="text" name="contact_us_de" id="contact_us_de" value="{{ $fields['contact_us_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_company_name_en</span>
                    </div>
                    <input type="text" name="contact_company_name_en" id="contact_company_name_en" value="{{ $fields['contact_company_name_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_company_name_ua</span>
                    </div>
                    <input type="text" name="contact_company_name_ua" id="contact_company_name_ua" value="{{ $fields['contact_company_name_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_company_name_ru</span>
                    </div>
                    <input type="text" name="contact_company_name_ru" id="contact_company_name_ru" value="{{ $fields['contact_company_name_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_company_name_de</span>
                    </div>
                    <input type="text" name="contact_company_name_de" id="contact_company_name_de" value="{{ $fields['contact_company_name_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">contact_location_en</span>
                    </div>
                    <input type="text" name="contact_location_en" id="contact_location_en" value="{{ $fields['contact_location_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">contact_location_ua</span>
                    </div>
                    <input type="text" name="contact_location_ua" id="contact_location_ua" value="{{ $fields['contact_location_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">contact_location_ru</span>
                    </div>
                    <input type="text" name="contact_location_ru" id="contact_location_ru" value="{{ $fields['contact_location_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">contact_location_de</span>
                    </div>
                    <input type="text" name="contact_location_de" id="contact_location_de" value="{{ $fields['contact_location_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">contact_email</span>
                    </div>
                    <input type="text" name="contact_email" id="contact_email" value="{{ $fields['contact_email'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">telegram</span>
                    </div>
                    <input type="text" name="telegram" id="telegram" value="{{ $fields['telegram'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">artstation</span>
                    </div>
                    <input type="text" name="artstation" id="artstation" value="{{ $fields['artstation'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">instagram</span>
                    </div>
                    <input type="text" name="instagram" id="instagram" value="{{ $fields['instagram'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">linkedin</span>
                    </div>
                    <input type="text" name="linkedin" id="linkedin" value="{{ $fields['linkedin'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">facebook</span>
                    </div>
                    <input type="text" name="facebook" id="facebook" value="{{ $fields['facebook'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">map_link</span>
                    </div>
                    <input type="text" name="map_link" id="map_link" value="{{ $fields['map_link'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title', 'ABOUT')

@section('content')
    <div class="container">

        <hr>

        <h1>ABOUT</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.about.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_profile_en</span>
                    </div>
                    <input type="text" name="field_company_profile_en" id="field_company_profile_en" value="{{ $fields['field_company_profile_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_profile_ua</span>
                    </div>
                    <input type="text" name="field_company_profile_ua" id="field_company_profile_ua" value="{{ $fields['field_company_profile_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_profile_ru</span>
                    </div>
                    <input type="text" name="field_company_profile_ru" id="field_company_profile_ru" value="{{ $fields['field_company_profile_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_profile_de</span>
                    </div>
                    <input type="text" name="field_company_profile_de" id="field_company_profile_de" value="{{ $fields['field_company_profile_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_name_en</span>
                    </div>
                    <input type="text" name="field_company_name_en" id="field_company_name_en" value="{{ $fields['field_company_name_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_name_ua</span>
                    </div>
                    <input type="text" name="field_company_name_ua" id="field_company_name_ua" value="{{ $fields['field_company_name_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_name_ru</span>
                    </div>
                    <input type="text" name="field_company_name_ru" id="field_company_name_ru" value="{{ $fields['field_company_name_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_company_name_de</span>
                    </div>
                    <input type="text" name="field_company_name_de" id="field_company_name_de" value="{{ $fields['field_company_name_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_about_location_en</span>
                    </div>
                    <input type="text" name="field_about_location_en" id="field_about_location_en" value="{{ $fields['field_about_location_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_about_location_ua</span>
                    </div>
                    <input type="text" name="field_about_location_ua" id="field_about_location_ua" value="{{ $fields['field_about_location_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_about_location_ru</span>
                    </div>
                    <input type="text" name="field_about_location_ru" id="field_about_location_ru" value="{{ $fields['field_about_location_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_about_location_de</span>
                    </div>
                    <input type="text" name="field_about_location_de" id="field_about_location_de" value="{{ $fields['field_about_location_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_establishment_en</span>
                    </div>
                    <input type="text" name="field_establishment_en" id="field_establishment_en" value="{{ $fields['field_establishment_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_establishment_ua</span>
                    </div>
                    <input type="text" name="field_establishment_ua" id="field_establishment_ua" value="{{ $fields['field_establishment_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_establishment_ru</span>
                    </div>
                    <input type="text" name="field_establishment_ru" id="field_establishment_ru" value="{{ $fields['field_establishment_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_establishment_de</span>
                    </div>
                    <input type="text" name="field_establishment_de" id="field_establishment_de" value="{{ $fields['field_establishment_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employee_en</span>
                    </div>
                    <input type="text" name="field_employee_en" id="field_employee_en" value="{{ $fields['field_employee_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employee_ua</span>
                    </div>
                    <input type="text" name="field_employee_ua" id="field_employee_ua" value="{{ $fields['field_employee_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employee_ru</span>
                    </div>
                    <input type="text" name="field_employee_ru" id="field_employee_ru" value="{{ $fields['field_employee_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employee_de</span>
                    </div>
                    <input type="text" name="field_employee_de" id="field_employee_de" value="{{ $fields['field_employee_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_ceo_en</span>
                    </div>
                    <input type="text" name="field_ceo_en" id="field_ceo_en" value="{{ $fields['field_ceo_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_ceo_ua</span>
                    </div>
                    <input type="text" name="field_ceo_ua" id="field_ceo_ua" value="{{ $fields['field_ceo_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_ceo_ru</span>
                    </div>
                    <input type="text" name="field_ceo_ru" id="field_ceo_ru" value="{{ $fields['field_ceo_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_ceo_de</span>
                    </div>
                    <input type="text" name="field_ceo_de" id="field_ceo_de" value="{{ $fields['field_ceo_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_director_en</span>
                    </div>
                    <input type="text" name="field_director_en" id="field_director_en" value="{{ $fields['field_director_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_director_ua</span>
                    </div>
                    <input type="text" name="field_director_ua" id="field_director_ua" value="{{ $fields['field_director_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_director_ru</span>
                    </div>
                    <input type="text" name="field_director_ru" id="field_director_ru" value="{{ $fields['field_director_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_director_de</span>
                    </div>
                    <input type="text" name="field_director_de" id="field_director_de" value="{{ $fields['field_director_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">about_description_en</label>
                    <textarea class="form-control" name="about_description_en" id="about_description_en" style="height: 100px">{{ $fields['about_description_en'] }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">about_description_ua</label>
                    <textarea class="form-control" name="about_description_ua" id="about_description_ua" style="height: 100px">{{ $fields['about_description_ua'] }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">about_description_ru</label>
                    <textarea class="form-control" name="about_description_ru" id="about_description_ru" style="height: 100px">{{ $fields['about_description_ru'] }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">about_description_de</label>
                    <textarea class="form-control" name="about_description_de" id="about_description_de" style="height: 100px">{{ $fields['about_description_de'] }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME EN</span>
                    </div>
                    <input type="text" name="company_name_en" id="company_name_en" value="{{ $fields['company_name_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME UA</span>
                    </div>
                    <input type="text" name="company_name_ua" id="company_name_ua" value="{{ $fields['company_name_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME RU</span>
                    </div>
                    <input type="text" name="company_name_ru" id="company_name_ru" value="{{ $fields['company_name_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">COMPANY NAME DE</span>
                    </div>
                    <input type="text" name="company_name_de" id="company_name_de" value="{{ $fields['company_name_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION EN</span>
                    </div>
                    <input type="text" name="location_text_en" id="location_text_en" value="{{ $fields['location_text_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION UA</span>
                    </div>
                    <input type="text" name="location_text_ua" id="location_text_ua" value="{{ $fields['location_text_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION RU</span>
                    </div>
                    <input type="text" name="location_text_ru" id="location_text_ru" value="{{ $fields['location_text_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOCATION DE</span>
                    </div>
                    <input type="text" name="location_text_de" id="location_text_de" value="{{ $fields['location_text_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ESTABLISHMENT EN</span>
                    </div>
                    <input type="text" name="establishment_en" id="establishment_en" value="{{ $fields['establishment_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ESTABLISHMENT UA</span>
                    </div>
                    <input type="text" name="establishment_ua" id="establishment_ua" value="{{ $fields['establishment_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ESTABLISHMENT RU</span>
                    </div>
                    <input type="text" name="establishment_ru" id="establishment_ru" value="{{ $fields['establishment_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ESTABLISHMENT DE</span>
                    </div>
                    <input type="text" name="establishment_de" id="establishment_de" value="{{ $fields['establishment_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">EMPLOYEE EN</span>
                    </div>
                    <input type="text" name="employee_en" id="employee_en" value="{{ $fields['employee_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">EMPLOYEE UA</span>
                    </div>
                    <input type="text" name="employee_ua" id="employee_ua" value="{{ $fields['employee_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">EMPLOYEE RU</span>
                    </div>
                    <input type="text" name="employee_ru" id="employee_ru" value="{{ $fields['employee_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">EMPLOYEE DE</span>
                    </div>
                    <input type="text" name="employee_de" id="employee_de" value="{{ $fields['employee_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">CEO EN</span>
                    </div>
                    <input type="text" name="ceo_en" id="ceo_en" value="{{ $fields['ceo_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">CEO UA</span>
                    </div>
                    <input type="text" name="ceo_ua" id="ceo_ua" value="{{ $fields['ceo_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">CEO RU</span>
                    </div>
                    <input type="text" name="ceo_ru" id="ceo_ru" value="{{ $fields['ceo_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">CEO DE</span>
                    </div>
                    <input type="text" name="ceo_de" id="ceo_de" value="{{ $fields['ceo_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DIRECTOR EN</span>
                    </div>
                    <input type="text" name="director_en" id="director_en" value="{{ $fields['director_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DIRECTOR UA</span>
                    </div>
                    <input type="text" name="director_ua" id="director_ua" value="{{ $fields['director_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DIRECTOR RU</span>
                    </div>
                    <input type="text" name="director_ru" id="director_ru" value="{{ $fields['director_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DIRECTOR DE</span>
                    </div>
                    <input type="text" name="director_de" id="director_de" value="{{ $fields['director_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

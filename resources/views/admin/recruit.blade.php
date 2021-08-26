@extends('admin.master')

@section('title', 'admin | ' . $page_info->name)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.recruit.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $page_info->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION EN</label>
                    <textarea class="form-control" name="description_en" id="description_en" style="height: 100px">{{ $page_info->description_en }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION UA</label>
                    <textarea class="form-control" name="description_ua" id="description_ua" style="height: 100px">{{ $page_info->description_ua }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION RU</label>
                    <textarea class="form-control" name="description_ru" id="description_ru" style="height: 100px">{{ $page_info->description_ru }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION DE</label>
                    <textarea class="form-control" name="description_de" id="description_de" style="height: 100px">{{ $page_info->description_de }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">EMAIL</span>
                    </div>
                    <input type="text" name="email" id="email" value="{{ $page_info->email }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_positions_available_en</span>
                    </div>
                    <input type="text" name="field_positions_available_en" id="field_positions_available_en" value="{{ $page_info->field_positions_available_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_positions_available_ua</span>
                    </div>
                    <input type="text" name="field_positions_available_ua" id="field_positions_available_ua" value="{{ $page_info->field_positions_available_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_positions_available_ru</span>
                    </div>
                    <input type="text" name="field_positions_available_ru" id="field_positions_available_ru" value="{{ $page_info->field_positions_available_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_positions_available_de</span>
                    </div>
                    <input type="text" name="field_positions_available_de" id="field_positions_available_de" value="{{ $page_info->field_positions_available_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_job_description_en</span>
                    </div>
                    <input type="text" name="field_job_description_en" id="field_job_description_en" value="{{ $page_info->field_job_description_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_job_description_ua</span>
                    </div>
                    <input type="text" name="field_job_description_ua" id="field_job_description_ua" value="{{ $page_info->field_job_description_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_job_description_ru</span>
                    </div>
                    <input type="text" name="field_job_description_ru" id="field_job_description_ru" value="{{ $page_info->field_job_description_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_job_description_de</span>
                    </div>
                    <input type="text" name="field_job_description_de" id="field_job_description_de" value="{{ $page_info->field_job_description_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employment_status_en</span>
                    </div>
                    <input type="text" name="field_employment_status_en" id="field_employment_status_en" value="{{ $page_info->field_employment_status_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employment_status_ua</span>
                    </div>
                    <input type="text" name="field_employment_status_ua" id="field_employment_status_ua" value="{{ $page_info->field_employment_status_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employment_status_ru</span>
                    </div>
                    <input type="text" name="field_employment_status_ru" id="field_employment_status_ru" value="{{ $page_info->field_employment_status_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_employment_status_de</span>
                    </div>
                    <input type="text" name="field_employment_status_de" id="field_employment_status_de" value="{{ $page_info->field_employment_status_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_location_en</span>
                    </div>
                    <input type="text" name="field_location_en" id="field_location_en" value="{{ $page_info->field_location_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_location_ua</span>
                    </div>
                    <input type="text" name="field_location_ua" id="field_location_ua" value="{{ $page_info->field_location_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_location_ru</span>
                    </div>
                    <input type="text" name="field_location_ru" id="field_location_ru" value="{{ $page_info->field_location_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_location_de</span>
                    </div>
                    <input type="text" name="field_location_de" id="field_location_de" value="{{ $page_info->field_location_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_benefits_en</span>
                    </div>
                    <input type="text" name="field_benefits_en" id="field_benefits_en" value="{{ $page_info->field_benefits_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_benefits_ua</span>
                    </div>
                    <input type="text" name="field_benefits_ua" id="field_benefits_ua" value="{{ $page_info->field_benefits_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_benefits_ru</span>
                    </div>
                    <input type="text" name="field_benefits_ru" id="field_benefits_ru" value="{{ $page_info->field_benefits_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_benefits_de</span>
                    </div>
                    <input type="text" name="field_benefits_de" id="field_benefits_de" value="{{ $page_info->field_benefits_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_workdays_en</span>
                    </div>
                    <input type="text" name="field_workdays_en" id="field_workdays_en" value="{{ $page_info->field_workdays_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_workdays_ua</span>
                    </div>
                    <input type="text" name="field_workdays_ua" id="field_workdays_ua" value="{{ $page_info->field_workdays_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_workdays_ru</span>
                    </div>
                    <input type="text" name="field_workdays_ru" id="field_workdays_ru" value="{{ $page_info->field_workdays_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_workdays_de</span>
                    </div>
                    <input type="text" name="field_workdays_de" id="field_workdays_de" value="{{ $page_info->field_workdays_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_en</span>
                    </div>
                    <input type="text" name="field_recruiting_process_en" id="field_recruiting_process_en" value="{{ $page_info->field_recruiting_process_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_ua</span>
                    </div>
                    <input type="text" name="field_recruiting_process_ua" id="field_recruiting_process_ua" value="{{ $page_info->field_recruiting_process_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_ru</span>
                    </div>
                    <input type="text" name="field_recruiting_process_ru" id="field_recruiting_process_ru" value="{{ $page_info->field_recruiting_process_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_de</span>
                    </div>
                    <input type="text" name="field_recruiting_process_de" id="field_recruiting_process_de" value="{{ $page_info->field_recruiting_process_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_1_en</span>
                    </div>
                    <input type="text" name="field_recruiting_process_1_en" id="field_recruiting_process_1_en" value="{{ $page_info->field_recruiting_process_1_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_1_ua</span>
                    </div>
                    <input type="text" name="field_recruiting_process_1_ua" id="field_recruiting_process_1_ua" value="{{ $page_info->field_recruiting_process_1_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_1_ru</span>
                    </div>
                    <input type="text" name="field_recruiting_process_1_ru" id="field_recruiting_process_1_ru" value="{{ $page_info->field_recruiting_process_1_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_1_de</span>
                    </div>
                    <input type="text" name="field_recruiting_process_1_de" id="field_recruiting_process_1_de" value="{{ $page_info->field_recruiting_process_1_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_2_en</span>
                    </div>
                    <input type="text" name="field_recruiting_process_2_en" id="field_recruiting_process_2_en" value="{{ $page_info->field_recruiting_process_2_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_2_ua</span>
                    </div>
                    <input type="text" name="field_recruiting_process_2_ua" id="field_recruiting_process_2_ua" value="{{ $page_info->field_recruiting_process_2_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_2_ru</span>
                    </div>
                    <input type="text" name="field_recruiting_process_2_ru" id="field_recruiting_process_2_ru" value="{{ $page_info->field_recruiting_process_2_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_2_de</span>
                    </div>
                    <input type="text" name="field_recruiting_process_2_de" id="field_recruiting_process_2_de" value="{{ $page_info->field_recruiting_process_2_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_3_en</span>
                    </div>
                    <input type="text" name="field_recruiting_process_3_en" id="field_recruiting_process_3_en" value="{{ $page_info->field_recruiting_process_3_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_3_ua</span>
                    </div>
                    <input type="text" name="field_recruiting_process_3_ua" id="field_recruiting_process_3_ua" value="{{ $page_info->field_recruiting_process_3_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_3_ru</span>
                    </div>
                    <input type="text" name="field_recruiting_process_3_ru" id="field_recruiting_process_3_ru" value="{{ $page_info->field_recruiting_process_3_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_3_de</span>
                    </div>
                    <input type="text" name="field_recruiting_process_3_de" id="field_recruiting_process_3_de" value="{{ $page_info->field_recruiting_process_3_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_4_en</span>
                    </div>
                    <input type="text" name="field_recruiting_process_4_en" id="field_recruiting_process_4_en" value="{{ $page_info->field_recruiting_process_4_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_4_ua</span>
                    </div>
                    <input type="text" name="field_recruiting_process_4_ua" id="field_recruiting_process_4_ua" value="{{ $page_info->field_recruiting_process_4_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_4_ru</span>
                    </div>
                    <input type="text" name="field_recruiting_process_4_ru" id="field_recruiting_process_4_ru" value="{{ $page_info->field_recruiting_process_4_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_recruiting_process_4_de</span>
                    </div>
                    <input type="text" name="field_recruiting_process_4_de" id="field_recruiting_process_4_de" value="{{ $page_info->field_recruiting_process_4_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_bottom_text_en</span>
                    </div>
                    <input type="text" name="field_bottom_text_en" id="field_bottom_text_en" value="{{ $page_info->field_bottom_text_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_bottom_text_ua</span>
                    </div>
                    <input type="text" name="field_bottom_text_ua" id="field_bottom_text_ua" value="{{ $page_info->field_bottom_text_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_bottom_text_ru</span>
                    </div>
                    <input type="text" name="field_bottom_text_ru" id="field_bottom_text_ru" value="{{ $page_info->field_bottom_text_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_bottom_text_de</span>
                    </div>
                    <input type="text" name="field_bottom_text_de" id="field_bottom_text_de" value="{{ $page_info->field_bottom_text_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">employment_status_en</span>
                    </div>
                    <input type="text" name="employment_status_en" id="employment_status_en" value="{{ $page_info->employment_status_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">employment_status_ua</span>
                    </div>
                    <input type="text" name="employment_status_ua" id="employment_status_ua" value="{{ $page_info->employment_status_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">employment_status_ru</span>
                    </div>
                    <input type="text" name="employment_status_ru" id="employment_status_ru" value="{{ $page_info->employment_status_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">employment_status_de</span>
                    </div>
                    <input type="text" name="employment_status_de" id="employment_status_de" value="{{ $page_info->employment_status_de }}" class="form-control" aria-describedby="addon-wrapping">
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
                        <span class="input-group-text" id="addon-wrapping">benefits_en</span>
                    </div>
                    <input type="text" name="benefits_en" id="benefits_en" value="{{ $page_info->benefits_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">benefits_ua</span>
                    </div>
                    <input type="text" name="benefits_ua" id="benefits_ua" value="{{ $page_info->benefits_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">benefits_ru</span>
                    </div>
                    <input type="text" name="benefits_ru" id="benefits_ru" value="{{ $page_info->benefits_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">benefits_de</span>
                    </div>
                    <input type="text" name="benefits_de" id="benefits_de" value="{{ $page_info->benefits_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">workdays_en</span>
                    </div>
                    <input type="text" name="workdays_en" id="workdays_en" value="{{ $page_info->workdays_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">workdays_ua</span>
                    </div>
                    <input type="text" name="workdays_ua" id="workdays_ua" value="{{ $page_info->workdays_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">workdays_ru</span>
                    </div>
                    <input type="text" name="workdays_ru" id="workdays_ru" value="{{ $page_info->workdays_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">workdays_de</span>
                    </div>
                    <input type="text" name="workdays_de" id="workdays_de" value="{{ $page_info->workdays_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>



                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

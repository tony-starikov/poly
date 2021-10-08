@extends('admin.master')

@section('title', 'WORK')

@section('content')
    <div class="container">

        <hr>

        <h1>WORK</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.works.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_artists_en</span>
                    </div>
                    <input type="text" name="field_artists_en" id="field_artists_en" value="{{ $fields['field_artists_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_artists_ua</span>
                    </div>
                    <input type="text" name="field_artists_ua" id="field_artists_ua" value="{{ $fields['field_artists_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_artists_ru</span>
                    </div>
                    <input type="text" name="field_artists_ru" id="field_artists_ru" value="{{ $fields['field_artists_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_artists_de</span>
                    </div>
                    <input type="text" name="field_artists_de" id="field_artists_de" value="{{ $fields['field_artists_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_software_en</span>
                    </div>
                    <input type="text" name="field_software_en" id="field_software_en" value="{{ $fields['field_software_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_software_ua</span>
                    </div>
                    <input type="text" name="field_software_ua" id="field_software_ua" value="{{ $fields['field_software_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_software_ru</span>
                    </div>
                    <input type="text" name="field_software_ru" id="field_software_ru" value="{{ $fields['field_software_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">field_software_de</span>
                    </div>
                    <input type="text" name="field_software_de" id="field_software_de" value="{{ $fields['field_software_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title')

@section('content')
    <div class="container">

        <hr>

        <h1>MAIN PAGE</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.main.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN EN</span>
                    </div>
                    <input type="text" name="field_slogan_en" id="field_slogan_en" value="{{ $fields['field_slogan_en'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN UA</span>
                    </div>
                    <input type="text" name="field_slogan_ua" id="field_slogan_ua" value="{{ $fields['field_slogan_ua'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN RU</span>
                    </div>
                    <input type="text" name="field_slogan_ru" id="field_slogan_ru" value="{{ $fields['field_slogan_ru'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN DE</span>
                    </div>
                    <input type="text" name="field_slogan_de" id="field_slogan_de" value="{{ $fields['field_slogan_de'] }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

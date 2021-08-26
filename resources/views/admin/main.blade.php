@extends('admin.master')

@section('title', $page_info->title)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.main.page.edit') }}">
            <div>
                @csrf
                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $page_info->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN EN</span>
                    </div>
                    <input type="text" name="field_slogan_en" id="field_slogan_en" value="{{ $page_info->field_slogan_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN UA</span>
                    </div>
                    <input type="text" name="field_slogan_ua" id="field_slogan_ua" value="{{ $page_info->field_slogan_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN RU</span>
                    </div>
                    <input type="text" name="field_slogan_ru" id="field_slogan_ru" value="{{ $page_info->field_slogan_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SLOGAN DE</span>
                    </div>
                    <input type="text" name="field_slogan_de" id="field_slogan_de" value="{{ $page_info->field_slogan_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $page_info->description }}</textarea>
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

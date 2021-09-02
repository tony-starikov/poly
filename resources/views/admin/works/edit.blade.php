@extends('admin.master')

@section('title', 'EDIT ' . $work->name)

@section('content')
    <div class="container">

        <hr>

        <h1>EDIT WORK</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('works.update', $work) }}">
            <div>
                @method('PUT')
                @csrf

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME EN</span>
                    </div>
                    <input type="text" name="name_en" id="name_en" value="{{ $work->name_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME UA</span>
                    </div>
                    <input type="text" name="name_ua" id="name_ua" value="{{ $work->name_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME RU</span>
                    </div>
                    <input type="text" name="name_ru" id="name_ru" value="{{ $work->name_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME DE</span>
                    </div>
                    <input type="text" name="name_de" id="name_de" value="{{ $work->name_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">CODE</span>
                        </div>
                        <input type="text" name="code" id="code" value="{{ $work->code }}" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ $work->title }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION EN</span>
                    </div>
                    <input type="text" name="small_description_en" id="small_description_en" value="{{ $work->small_description_en }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION UA</span>
                    </div>
                    <input type="text" name="small_description_ua" id="small_description_ua" value="{{ $work->small_description_ua }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION RU</span>
                    </div>
                    <input type="text" name="small_description_ru" id="small_description_ru" value="{{ $work->small_description_ru }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION DE</span>
                    </div>
                    <input type="text" name="small_description_de" id="small_description_de" value="{{ $work->small_description_de }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">DESCRIPTION EN</span>
                    </div>
                    <textarea class="form-control" name="description_en" id="description_en">{{ $work->description_en }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">DESCRIPTION UA</span>
                    </div>
                    <textarea class="form-control" name="description_ua" id="description_ua">{{ $work->description_ua }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">DESCRIPTION RU</span>
                    </div>
                    <textarea class="form-control" name="description_ru" id="description_ru">{{ $work->description_ru }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">DESCRIPTION DE</span>
                    </div>
                    <textarea class="form-control" name="description_de" id="description_de">{{ $work->description_de }}</textarea>
                </div>

                <div class="form-row">
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon05">COVER IMAGE</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="cover" id="cover" class="custom-file-input" aria-describedby="inputGroupFileAddon05">
                            <label class="custom-file-label" for="cover">Choose file</label>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <p>SOFTWARE</p>
                    @foreach($software as $soft)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="soft[]" value="{{ $soft->id }}" id="flexCheckSoft{{ $soft->id }}" @if($work->software->contains($soft->id)) checked @endif>
                            <label class="form-check-label" for="flexCheckSoft{{ $soft->id }}">
                                {{ $soft->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <p>ARTISTS</p>
                    @foreach($artists as $artist)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="artists[]" value="{{ $artist->id }}" id="flexCheckArtist{{ $artist->id }}" @if($work->artists->contains($artist->id)) checked @endif>
                            <label class="form-check-label" for="flexCheckArtist{{ $artist->id }}">
                                {{ $artist->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title', 'CREATE')

@section('content')
    <div class="container">

        <hr>

        <h3>ADD WORK</h3>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('works.store') }}">
            <div>
                @csrf

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME EN</span>
                        </div>
                        <input type="text" name="name_en" id="name_en" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME UA</span>
                        </div>
                        <input type="text" name="name_ua" id="name_ua" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME RU</span>
                        </div>
                        <input type="text" name="name_ru" id="name_ru" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">NAME DE</span>
                        </div>
                        <input type="text" name="name_de" id="name_de" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group flex-nowrap mb-3 col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">CODE</span>
                        </div>
                        <input type="text" name="code" id="code" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">TITLE</span>
                    </div>
                    <input type="text" name="title" id="title" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION EN</span>
                    </div>
                    <input type="text" name="small_description_en" id="small_description_en" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION UA</span>
                    </div>
                    <input type="text" name="small_description_ua" id="small_description_ua" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION RU</span>
                    </div>
                    <input type="text" name="small_description_ru" id="small_description_ru" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">SMALL DESCRIPTION DE</span>
                    </div>
                    <input type="text" name="small_description_de" id="small_description_de" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION EN</label>
                        <textarea class="form-control" name="description_en" id="description_en" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION UA</label>
                        <textarea class="form-control" name="description_ua" id="description_ua" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION RU</label>
                        <textarea class="form-control" name="description_ru" id="description_ru" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION DE</label>
                        <textarea class="form-control" name="description_de" id="description_de" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group mb-3 col-md-6">
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
                            <input class="form-check-input" type="checkbox" name="soft[]" value="{{ $soft->id }}" id="flexCheckSoft{{ $soft->id }}">
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
                            <input class="form-check-input" type="checkbox" name="artists[]" value="{{ $artist->id }}" id="flexCheckArtist{{ $artist->id }}">
                            <label class="form-check-label" for="flexCheckArtist{{ $artist->id }}">
                                {{ $artist->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <button class="btn btn-success my-3">CREATE</button>

                <hr>

            </div>
        </form>

    </div> <!-- /container -->
@endsection

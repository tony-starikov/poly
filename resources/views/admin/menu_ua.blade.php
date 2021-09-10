@extends('admin.master')

@section('title', 'admin | menu | settings')

@section('content')
    <div class="container">

        <hr>

        <h1>{{ App::getLocale() }} | MENU</h1>

        <hr>

        @foreach($items as $k => $v)
            @if($k === 'current_locale')
                @continue
            @endif

                <form method="POST" enctype="multipart/form-data"
                      action="{{ route('menu.ua.edit') }}
                          ">
                    <div>

                        @csrf
                        <input type="text" name="key" value="{{ $k }}" style="display: none;">

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">{{ $k }}</span>
                            </div>
                            <input type="text" name="value" id="title" value="{{ $v }}" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                        <button class="btn btn-success my-3">EDIT</button>

                    </div>
                </form>

        @endforeach

    </div> <!-- /container -->
@endsection

@extends('admin.master')

@section('title', 'ADMIN-SOFTWARE')

@section('content')
    <div class="container">

        <hr>

        <h1>ADMIN-SOFTWARE</h1>

        <hr>

        <a class="btn btn-success" type="button" href="{{ route('software.create') }}">ADD SOFTWARE</a>

        @foreach($software as $soft)
            <p>
                id: {{ $soft->id }} | name: {{ $soft->name }}
                <a href="{{ route('software.show', $soft) }}"><button type="button" class="btn btn-link">SHOW</button></a>
                <a href="{{ route('software.edit', $soft) }}"><button type="button" class="btn btn-link">EDIT</button></a>
            </p>
            <form id="delete-form" action="{{ route('software.destroy', $soft) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-primary">DELETE</button>
            </form>
        @endforeach

    </div> <!-- /container -->
@endsection

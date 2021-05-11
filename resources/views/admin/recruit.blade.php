@extends('admin.master')

@section('title', 'admin | ' . $page_info->name)

@section('content')
    <div class="container">

        <hr>

        <h1>{{ $page_info->name }}</h1>

        <img src="{{ Storage::url($page_info->image) }}" alt="{{ $page_info->name }}">

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
                    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $page_info->description }}</textarea>
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">EMAIL</span>
                    </div>
                    <input type="text" name="email" id="email" value="{{ $page_info->email }}" class="form-control" aria-describedby="addon-wrapping">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">JOBS DESCRIPTION</label>
                    <textarea class="form-control" name="jobs_description" id="jobs_description" style="height: 100px">{{ $page_info->jobs_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">RECRUITING PROCESS</label>
                    <textarea class="form-control" name="recruiting_process" id="recruiting_process" style="height: 100px">{{ $page_info->recruiting_process }}</textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">IMAGE</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" id="image" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <button class="btn btn-success my-3">EDIT</button>
            </div>
        </form>

    </div> <!-- /container -->
@endsection

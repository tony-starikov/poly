<div class="col-md-4">
    <div class="card mb-4 mt-4 box-shadow">
        <a href="{{ route('work', $work->code) }}">
            <img class="card-img-top" src="{{ Storage::url($work->image_1) }}" alt="Card">
        </a>
        <div class="card-body">
            <p>{{ $work->name }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('work', $work->code) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

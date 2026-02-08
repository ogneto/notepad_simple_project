@if(session('success'))
    <div class="alert alert-success d-inline-block mb-3">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger d-inline-block mb-3">
        {{ session('error') }}
    </div>
@endif
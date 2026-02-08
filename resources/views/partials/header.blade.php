<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
        @if(session('user'))
        <a class="navbar-brand text-gradient" href="{{ url('/app') }}">
            <i class="bi bi-journal-text me-2"></i>Notepad App
        </a>
        @else
        <a class="navbar-brand text-gradient" href="{{ url('/') }}">
            <i class="bi bi-journal-text me-2"></i>Notepad App
        </a>
        @endif

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            
            @if(! session('user'))
                <div class="d-flex align-items-center gap-3">
                   <a href="{{ route('login') }}" class="btn btn-primary btn-sm shadow-sm">Login</a>
                </div>
            @else
                <div class="d-flex align-items-center gap-3">
                   <a href="{{ route('logout') }}" class="btn btn-primary btn-sm shadow-sm">Logout</a>
                   <a href="{{ route('showCreateNotePage') }}" class="btn btn-primary btn-sm shadow-sm">Create Note</a>
                </div>
            @endif
        </div>
    </div>
</nav>

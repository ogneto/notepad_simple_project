<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand text-gradient" href="{{ url('/') }}">
            <i class="bi bi-journal-text me-2"></i>Notepad App
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if(session('user'))
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Note</a>
                    </li>
                </ul>
            </div>
        @endif
            
            @if(! session('user'))
                <div class="d-flex align-items-center gap-3">
                   <a href="{{ route('login') }}" class="btn btn-primary btn-sm shadow-sm">Login</a>
                </div>
            @else
                <div class="d-flex align-items-center gap-3">
                   <a href="#" class="btn btn-primary btn-sm shadow-sm">Logout</a>
                </div>
            @endif
        </div>
    </div>
</nav>

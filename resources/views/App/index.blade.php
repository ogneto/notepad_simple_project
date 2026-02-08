
@extends('templates.main_template')

@section('content')

    
    @if(session('logged'))
        <div class="alert alert-success">
            {{ session('logged') }}
        </div>
    @endif

    <h1>Hello, {{ session('user.username') }}</h1>

    @if(count($notes) == 0) 
        <div class="alert alert-info" role="alert">
           You don't have any notes yet. Create one to get started.
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary">Create your first note</a>

    @else
        <div class="row">
            @foreach($notes as $note)
                <div class="col-md-4 mb-4">
                    @include('App.notes')
                </div>
            @endforeach
        </div>
    @endif

@endsection
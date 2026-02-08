
@extends('templates.main_template')

@section('content')

    
    @if(session('logged'))
        <div class="alert alert-success">
            {{ session('logged') }}
        </div>
    @endif

    <h1>Hello, {{ session('user.username') }}</h1>

    @if(session('success'))
        <div class="alert alert-success d-inline-block mb-3">
            {{ session('success') }}
        </div>
    @endif

    @if(count($notes) == 0) 
        <div class="alert alert-info" role="alert">
           You don't have any notes yet. Create one to get started.
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary">Create your first note</a>

    @else
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($notes as $note)
                    @include('App.notes')
                @endforeach
            </div>
        </div>
    @endif

@endsection
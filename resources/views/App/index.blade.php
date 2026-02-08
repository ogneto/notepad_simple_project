
@extends('templates.main_template')

@section('content')

    
    @if(session('logged'))
        <div class="alert alert-success">
            {{ session('logged') }}
        </div>
    @endif

    <h1>Hello, {{ session('user.username') }}</h1>

@endsection
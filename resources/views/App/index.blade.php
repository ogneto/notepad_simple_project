
@extends('templates.main_template')

@section('content')

    
    <h1>Hello, {{ session('user.username') }}</h1>

@endsection
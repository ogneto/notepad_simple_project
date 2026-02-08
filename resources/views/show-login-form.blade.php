@extends('templates.main_template')

@section('content')

    <h1>Login</h1>

    <form action="{{ route('loginSubmit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                <div class="alert alert-danger d-inline-block" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>  
            <input type="password" class="form-control" name="password">
            @error('password')
                <br>
                <div class="alert alert-danger d-inline-block" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection
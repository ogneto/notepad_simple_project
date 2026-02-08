@extends('templates.main_template')

@section('content')


    <h1> Welcome! </h1>

    <div class="alert alert-primary text-center" role="alert">
        Write your notes easily and quickly!
    </div>

    <div class="d-flex gap-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <p class="card-text">To create, edit or delete your notes, you must be logged in.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Instructions</h5>
                <p class="card-text">You can create how many notes you want. After creating a note, you can edit or delete it.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">About Creator</h5>
                <p class="card-text">I'm a student of systems analysis and development and I work with web development. </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">My GitHub</h5>
                <p class="card-text">You can see my projects and my career path on my GitHub. </p>
                <a target="blank" href="https://github.com/ogneto" class="btn btn-primary">GitHub</a>
            </div>
        </div>


    </div>

@endsection
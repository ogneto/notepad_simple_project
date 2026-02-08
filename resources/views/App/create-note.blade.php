@extends('templates.main_template')

@section('content')

    @if($notesQuantity == 0)
        <h1>Create your first note</h1>
    @else
        <h1>Create a new note</h1>
        <div class="alert alert-info d-inline-block" role="alert"> 
            You have {{ $notesQuantity }} notes!
        </div>
    @endif

    <form action="{{ route('createNote') }}" method="POST">
        @include('App.create-note-form')
    </form>

    
@endsection
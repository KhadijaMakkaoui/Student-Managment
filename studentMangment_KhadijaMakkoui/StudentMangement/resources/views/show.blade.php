@extends('layout')

@section('content')
    <h2>Détails de l'étudiant</h2>
    
    <h3>{{ $student->name }}</h3>
    <p>{{ $student->email }}</p>
    <p>{{ $student->date_of_birth }}</p>
    
    @if ($student->image)
        <img src="{{ Storage::url('images/' . $student->image) }}" alt="Image de l'étudiant" width="150">
    @endif
@endsection

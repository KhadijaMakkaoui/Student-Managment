@extends('layout')

@section('content')
    <h2>Modifier l'étudiant</h2>
    
    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
        </div>
        
        <div class="form-group">
            <label for="date_of_birth">Date de naissance :</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth }}" required>
        </div>
        
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" class="form-control" name="image">
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection

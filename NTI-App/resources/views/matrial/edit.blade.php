@extends('welcome')

@section('content')
<div class="container">
    <div class="card shadow p-4" style="width: 100%; max-width: 450px;">

        <h2 class="mb-4 text-center text-primary">Create Class Room</h2>
        <form action="{{ route('classrooms.update' , $classRoom->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Class Name</label>
                <input  value="{{ $classRoom->name }}"  type="text" class="form-control" id="name" name="name" required>
                <label for="first_name" class="form-label">Rool</label>
                <input value="{{ $classRoom->rool }}" type="text" class="form-control" id="rool" name="rool" required>
                
                <button class="btn btn-primary my-4" type="submit" >Update</button>
            </form>
        </div>
        </div>
        
        @endsection
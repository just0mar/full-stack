@section('title')
     edit student
@endsection


@extends('welcome')

@section('content')
<div class="container">
<h2>Edit Student</h2>
{{-- @dd($student) --}}
    <form action="{{ route('student.update',$student->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" value="{{ $student->first_name }}" name="first_name" >
            <label for="first_name" class="form-label">Last Name</label>
            <input value="{{ $student->last_name }}"  type="text" class="form-control" id="last_name" name="last_name" >
            <label for="first_name" class="form-label">email</label>
            <input value="{{ $student->email }}" type="text" class="form-control" id="email" name="email" >
            <label for="age" class="form-label">Age</label>
            <input value="{{ $student->age }}"  type="number" class="form-control" id="age" name="age" required>
            <button class="btn btn-primary my-4" type="submit" >Update</button>
        </form>
    </div>
        
        @endsection



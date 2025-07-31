@section('title')
     create student
@endsection


@extends('welcome')

@section('content')
<div class="container">
<h2>Create Student</h2>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf 
        @method('POST')
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
            <label for="first_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
            <label for="first_name" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
            <button class="btn btn-primary my-4" type="submit" >Submit</button>
        </form>
    </div>
        
        @endsection



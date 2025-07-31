@section('title')
     create student
@endsection


@extends('welcome')

@section('content')
<div class="container">
    <div class="card shadow p-4" style="width: 100%; max-width: 450px;">

        <h2 class="mb-4 text-center text-primary">Create Class Room</h2>
        <form action="{{ route('classrooms.store') }}" method="POST">
            @csrf 
            @method('POST')
            <div class="mb-3">
                <div>
                    <label for="name" class="form-label">Class Name</label>
                    <input   placeholder="enter className" type="text" class="form-control  @error('name') is-invalid @enderror " id="name" name="name" >
                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
                <div>

                    <label for="first_name" class="form-label">Rool</label>
                    <input 
                type="text" 
                class="form-control @error('rool') is-invalid @enderror" 
                id="rool" 
                name="rool" 
                placeholder="Enter Roll" 
                value="{{ old('rool') }}"
                        >
                     @error('rool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                
                <button class="btn btn-primary my-4" type="submit" >Submit</button>
            </form>
        </div>
        </div>
        
        @endsection



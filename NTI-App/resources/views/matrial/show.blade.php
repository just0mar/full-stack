@extends('welcome')

@section('content')
<div class="container">
    <div class="card shadow p-4 my-4" style="width: 100%; max-width: 450px;">

        <h2 class="mb-4 text-center text-primary">Show Class Room</h2>
        
            @csrf 
            @method('GET')
            <div class="mb-3">
                <div>
                    <strong>Class Name:</strong> {{ $classroom->name }}
                </div>
                <div>
                    <strong>Rool:</strong> {{ $classroom->rool }}
                </div>
               
                
                
        </div>
        </div>
        
        @endsection
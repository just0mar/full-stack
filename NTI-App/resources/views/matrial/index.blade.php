@section('title')
student page
@endsection


@extends('welcome')

@if (session()->has('success'))
{{ session()->get('success') }}
@endif
@section('content')




{{-- @dd($students) --}}
<div class="container my-4">

    <h1 class="my-4">Class Rooms</h1>
    <a href="{{ route('classrooms.create') }}" class="btn btn-success mb-4">
        <i class="fa-solid fa-plus"></i> Create New Class Room
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Rool</th>
        
                <th scope="col">Created By</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                <th scope="col">Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $key=>$value )
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->name}}</td>
                <td>{{ $value->rool }}</td>
                <td>{{@$value->user->name}}</td>

                <td>
                    <form action="{{ route('classrooms.destroy' , $value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                    <!-- <i class="fa-solid fa-trash"></i> -->
                </td>
                <td>

                    <a href="{{ route('classrooms.edit', $value->id) }}" class="btn btn-primary"><i
                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                </td>
                <td>

                    <a href="{{ route('classrooms.show', $value->id) }}" class="btn btn-success"><i
                            class="fa-solid fa-pen-to-square"></i> Show</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>

@endsection
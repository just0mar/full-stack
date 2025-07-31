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

    <h1 class="my-4">Student</h1>
    <a href="{{ route('student.create') }}" class="btn btn-success mb-4">
        <i class="fa-solid fa-plus"></i> Create New Student
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Created By</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key=>$value )
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->first_name}}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->age}}</td>
                <td>{{@$value->user->name}}</td>

                <td>
                    <form action="{{ route('student.destroy' , $value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                    <!-- <i class="fa-solid fa-trash"></i> -->
                </td>
                <td>

                    <a href="{{ route('student.edit', $value->id) }}" class="btn btn-primary"><i
                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>

@endsection
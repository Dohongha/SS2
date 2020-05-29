@extends('master.layout')

@section('content')
<div>
    <a href="{{ action('StudentController@create') }}">
        <button type="button" class="btn btn-primary">Create</button>
    </a>
</div>
<br />

<table class="table table-striped">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>PhoneNumber</td>
        <td>Address</td>
        <td>Course</td>
        <td>Actions</td>
    </tr>

    @php($i = 1)
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phonenumber }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->course->name}}</td>
            <td>
                <a href="{{ action('StudentController@edit', ['student' => $student]) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                <a href="javascript:void(0)" onclick="document.getElementById('student-delete-{{ $student->id }}').submit()">
                    <button class="btn btn-danger">Delete</button>
                </a>
                <form method="POST" id="student-delete-{{ $student->id }}" action="{{ action('StudentController@destroy', ['student'=>$student]) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @php($i++)
    @endforeach
</table>

<style>
    a {
        text-decoration: none;
    }
</style>
@endsection
@extends('master.layout')

@section('content')
    <form method="POST" action="{{ action('StudentController@store') }}">
        @include('master.form')
        <div>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>   
@endsection
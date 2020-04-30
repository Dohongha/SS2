@extends('master.layout')

@section('content')   
<form action="{{ action('StudentController@update', ['student' => $student]) }}" method="POST">
    @method('PUT')
    @include('master.form')
    <div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
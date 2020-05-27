@extends('layouts.main')

@section('content')

<div class="container">
    <form action="/courses" method=POST>
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="{{ old('name') }}">
            <small id="helpId" class="text-muted">Help text</small>
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
      
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="{{ old('description') }}">
            <small id="helpId" class="text-muted">Help text</small>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Create</button>
    </form>       
</div>
@endsection
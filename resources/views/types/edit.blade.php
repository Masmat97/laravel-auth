@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Type</h1>
    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ $type->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="icon">Icon:</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ $type->icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
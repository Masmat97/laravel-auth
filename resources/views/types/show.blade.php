@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Type Details</h1>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $type->name }}</h2>
            <p class="card-text">{{ $type->description }}</p>
            <p><img src="/path/to/icons/{{ $type->icon }}" alt="{{ $type->name }}" width="50"></p>
            <a href="{{ route('types.edit', $type) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('types.destroy', $type) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('types.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
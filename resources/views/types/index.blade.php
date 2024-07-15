@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Types</h1>
    <a href="{{ route('types.create') }}" class="btn btn-primary">Create New Type</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td><img src="/path/to/icons/{{ $type->icon }}"  width="50"></td>
                    <td>
                        <a href="{{ route('types.show', $type) }}" class="btn btn-info">View</a>
                        <a href="{{ route('types.edit', $type) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('types.create', $type) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
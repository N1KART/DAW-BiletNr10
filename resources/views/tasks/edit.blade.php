@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="/tasks/{{$task -> id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description"  name="description" value="{{$task->description}}">
        </div>
        <div class="mb-3">
            <label for="Select" class="form-label">Status</label>
            <select class="form-select mb-2" name="completed_at" id="completed_at">
                <option value="In progres">In Progress</option>
                <option value="Finisat">Complete</option>
                <option value="Esuat">Failed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
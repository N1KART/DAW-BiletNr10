@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{route('tasks.store')}}" method="post">
    @csrf
    <div class="container mt-4">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        
        <div class="mb-3">
            <label for="Select" class="form-label">Status</label>
            <select class="form-select mb-2" name="completed_at" id="completed_at">
                <option value="In progres">In progres</option>
                <option value="Finisat">Finisat</option>
                <option value="Esuat">Esuat</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
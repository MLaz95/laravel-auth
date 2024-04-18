@extends('layouts.app')

@section('content')
    
    <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label text-capitalize">Project Name</label>
            <input type="text" class="form-control" name="name" value="{{$project->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label  text-capitalize">description</label>
            <textarea type="password" class="form-control" name="description" >{{$project->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label text-capitalize">cover</label>
            <input type="text" class="form-control" name="cover" value="{{$project->cover}}">
        </div>
        <div class="mb-3">
            <label for="tech" class="form-label text-capitalize">tech</label>
            <input type="text" class="form-control" name="tech" value="{{$project->tech}}">
        </div>
        <div class="mb-3">
            <label for="github" class="form-label text-capitalize">github</label>
            <input type="text" class="form-control" name="github" value="{{$project->github}}">
        </div>
        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('projects.index')}}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
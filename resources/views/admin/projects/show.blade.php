@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->name }}</p>
        <p>{{ $project->description }}</p>
        <p>{{ $project->repository }}</p>
        <a href="{{ route('admin.projects.edit', $project->id) }}">edit</a>
    </div>
@endsection

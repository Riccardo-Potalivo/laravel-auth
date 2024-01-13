@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>project List</h1>

        <a href="{{ route('admin.projects.create') }}">Create</a>

        @foreach ($projects as $project)
            <p><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a></p>
        @endforeach
    </div>
@endsection

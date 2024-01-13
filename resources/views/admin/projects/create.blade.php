@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="150" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="150" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    cols="30" rows="10">{{ old('description') }}
                @error('description')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
                </textarea>
            </div>

            <div class="mb-3">
                <label for="repository">Repository</label>
                <input type="url" class="form-control @error('repository') is-invalid @enderror" name="repository"
                    id="repository" maxlength="255" value="{{ old('repository') }}">
                @error('repository')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>


    </div>
@endsection

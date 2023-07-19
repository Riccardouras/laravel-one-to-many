@extends('layouts.app')
@section('page-title', 'Modifica')
@section('content')
<form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
    @csrf
    @method("PUT")

    <label for="title">Titolo</label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
        value="{{ old('title', $project->title) }}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="content">Descrizione</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror" cols="30"
        rows="5">{{ old('content', $project->content) }}</textarea>
    @error('content')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
</form>
@endsection
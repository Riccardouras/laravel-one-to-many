@extends('layouts.app')projects
@section('page-title', 'Modifica')
@section('content')
<form action="{{ route('admin.projects.update', ['project' => $projects->id]) }}" method="post">
    @csrf
    @method("PUT")

    <label for="title">Titolo</label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
        value="{{ old('title', $projects->title) }}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="content">Descrizione</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror" cols="30"
        rows="5">{{ old('content', $projects->content) }}</textarea>
    @error('content')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
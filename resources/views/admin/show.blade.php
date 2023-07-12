
@extends('layouts.app')
@section('page-title', 'Comic')
@section('content')
@if ($project->type)
    <p>Type: {{ $project->type->name }}</p>
@endif
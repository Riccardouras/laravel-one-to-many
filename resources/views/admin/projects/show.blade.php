@extends('layouts.app')
@section('page-title', 'projects')
@section('content')
{{-- Metodo da rivedere --}}
<script>
     function confirmDelete() {
    return confirm('Sei sicuro di voler eliminare questo elemento?');
}
</script>
<h1>projects</h1>
<table class="table table-striped table-bordered">
    <thead  class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{route("admin.projects.show", $project->id)}}">{{$project->title}}</a></td>
            <td>{{ $project->content }}</td>
            <td> <img src={{"$project->thumb"}} alt={{"$project->title"}}></td>
            <td>{{ $project->type }}</td>
            <td> <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="confirmDelete();">Delete</button>
            </form></td> 
            <td><button class="btn btn-warning"><a class="text-white" href="{{ route('admin.projects.edit', $project->id)}}">Edit</a></button></td>
            <td>
            </td>
        </tr>
    </tbody>
</table>

@endsection
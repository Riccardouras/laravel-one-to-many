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
            <td><a href="{{route("projects.show", $projects->id)}}">{{$projects->title}}</a></td>
            <td>{{ $projects->content }}</td>
            <td> <img src={{"$projects->thumb"}} alt={{"$projects->title"}}></td>
            <td>{{ $projects->type }}</td>
            <td> <form action="{{ route('projectss.destroy', $projects) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="confirmDelete();">Delete</button>
            </form></td> 
            <td><button class="btn btn-warning"><a class="text-white" href="{{ route('projects.edit', $projects->id)}}">Edit</a></button></td>
        </tr>
    </tbody>
</table>

@endsection
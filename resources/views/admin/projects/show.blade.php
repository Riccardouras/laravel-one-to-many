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
<div class="card p-0 mb-4" style="width: 18rem;">
    <img class="card-img-top" src="{{ asset("storage/".$project->image) }}" alt="{{ $project->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
            <p>Categoria: {{ $project->content }} </p>

        <p>types: 
        @forelse ($types as $type)
            <span>{{$type->name}}</span>
        @empty
            <span>Nessuno</span>
        @endforelse
        </p>
  
    </div>
</div>

@endsection
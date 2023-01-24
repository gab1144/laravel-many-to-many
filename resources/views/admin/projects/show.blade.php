@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>{{$project->name}}</h1>
            @if($project->cover_image)
                <img class="detail-img" src="{{asset('storage/'.$project->cover_image)}}" alt="{{$project->cover_image_original_name}}">
            @endif
            @if ($project->type)
                <h4>Tipo: {{$project->type->name}}</h4>
            @endif
            <div>Nome cliente: <strong>{{$project->client_name}}</strong></div>
            <div>Sommario: {!!$project->summary!!}</div>
            <a class="btn btn-primary text-white" href="{{route('admin.projects.index', $project)}}" title="edit">Torna alla lista</i></a>
            <a class="btn btn-warning text-white" href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
            @include('admin.partials.form-delete', [
                            'route' => 'projects',
                            'message' => "Confermi l'eliminazione del progetto: $project->title",
                            'entity' => $project
            ])
        </div>
    </main>
@endsection

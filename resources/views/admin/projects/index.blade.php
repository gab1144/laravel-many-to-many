@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 d-flex">
            <h1>Progetti</h1> <a href="{{route('admin.projects.create')}}" class="add-button btn btn-primary"><i class="fa-solid fa-plus"></i></a>
        </div>

        @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{session('deleted')}}
        </div>
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col"><a href="{{route('admin.projects.orderby',['id',$direction])}}">ID</a></th>
                <th scope="col"><a href="{{route('admin.projects.orderby',['name',$direction])}}">Nome progetto</a></th>
                <th scope="col"><a href="{{route('admin.projects.orderby',['client_name',$direction])}}">Nome cliente</a></th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{$project->id}}</th>
                        <td>{{$project->name}}  <span class="badge text-bg-info">{{$project->type?->name}}</span></td>
                        <td>{{$project->client_name}}</td>
                        <td><a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning " href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil text-white"></i></a>
                        @include('admin.partials.form-delete', [
                            'route' => 'projects',
                            'message' => "Confermi l'eliminazione del progetto: $project->title",
                            'entity' => $project
                        ])
                        </td>
                    <tr>
                @endforeach
            </tbody>
          </table>


        {{$projects->links()}}
    </div>
</div>
@endsection

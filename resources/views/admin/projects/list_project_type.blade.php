@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="my-5">Elenco progetti per tipo</h1>

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{session('deleted')}}
        </div>
    @endif



    <table class="table">
        <thead>
          <tr>
            <th scope="col"> Tipo </th>
            <th scope="col">Post</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($types as $type)
            <tr>
                <td>{{$type->name}}</td>
                <td>
                    <ul>
                        @foreach ($type->projects as $project)
                            <li>
                                <a href="{{route('admin.projects.show', $project)}}">{{$project->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </td>

            </tr>
            @empty

                <tr>
                    <td colspan="4"><h3>Nessun risultato trovato</h3></td>
                </tr>

            @endforelse

        </tbody>
      </table>




</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>Aggiungi un nuovo progetto</h1>
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
          @error('name')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo</label>
            <select class="form-select" name="type_id" aria-label="Default select example">
                <option value="">Selezionare un tipo</option>
                @foreach ($types as $type)
                    <option
                    @if($type->id == old('type_id')) selected @endif
                     value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
          <label for="client_name" class="form-label">Nome del cliente</label>
          <input type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" id="client_name" value="{{old('client_name')}}">
          @error('client_name')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Sommario</label>
            <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" id="summary" cols="30" rows="10">{{old('summary')}}</textarea>
            @error('summary')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
          </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine</label>
            <input
            onchange="showImage(event)" type="file" class="form-control" name="cover_image" id="cover_image" value="{{old('cover_image')}}">
            @error('cover_image')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
            <div class="image mt-2" >
                <img id='output-image' width="150" src="" alt="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#summary' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        })
        .catch( error => {
            console.error( error );
        } );

    function showImage(event){
        const tagImage = document.getElementById('output-image');
        tagImage.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

@endsection

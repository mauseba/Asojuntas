@extends('adminlte::page')

@section('title', 'Asojuntas')

@section('content_header')
    <h1>Crear nueva Publicacion</h1>
@stop

@section('content')
    <div class="card">
           <!-- Nav tabs -->
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Datos Basicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" id="men1" href="#menu1">Foto de la Publicacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" id="men2" href="#menu2">Observaciones</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.posts.partials.form')

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
    </script>


@endsection
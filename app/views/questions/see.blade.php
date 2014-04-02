@extends("layout")
@section('sidebar')
   @parent
   Informaci&oacute;n de pregunta
@stop
@section("content")
   {{ HTML::link('questions/list', 'Volver'); }}

   <h1>
   Pregunta # {{$question -> id }}
   </h1>
   <h2>Tem&aacute;tica: {{ $question -> tematica }} </h2>

   <p>Carrera:  {{ $question->carrera }}</p>
   <p>Universidad: {{ $question->universidad }}</p>
   {{ Form::open(array('url' => 'questions/update')) }}
   {{ Form::hidden('id', $question->id) }}
   {{ Form::hidden('email', $question->email) }}
   {{ Form::label('pregunta', 'Pregunta') }} <br>
   {{ Form::textarea('pregunta', $question->pregunta) }} <br>
   {{ Form::label('respuesta', 'Respuesta') }} <br> 
   {{ Form::textarea('respuesta', $question->respuesta) }}
   <br>
   {{ Form::label('publicar', 'Publicar') }}
   {{ Form::checkbox('publicar', true, $question->publicar) }}
   <br>
   {{ Form::label('emailBool', 'Enviar a Email') }}
   {{ Form::checkbox('emailBool', true) }}
   <br>
   {{ Form::submit('Enviar')}}
   {{ Form::close() }}
   <br>
   {{ $question->created_at}}
@stop
@section("footer")
  @parent
@stop
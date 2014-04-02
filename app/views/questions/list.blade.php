@extends("layout")
@section("content") 
<h1>
  Preguntas
</h1>

{{ HTML::link('questions/new', 'Agregar Pregunta'); }}

<ul>
  @foreach($questions as $question)
    <li>
      {{ HTML::link('questions/'.$question->id, '['.$question->id.'] - '.substr($question->pregunta, 0, 30).'...  '.$question->carrera) }}
      {{ HTML::link('questions/delete/'.$question->id, '[Eliminar]', ['onClick' => "if(!confirm('Esta seguro de eliminar esta pregunta?')){return false;};"]) }}
    </li>
  @endforeach
</ul>
@stop
@section("footer")
  @parent
@stop
@extends("layout")
@section("content") 

{{ HTML::style('css/questionsMenu.css') }}

<h1>
  Preguntas Frecuentes
</h1>

{{ HTML::link('questions/new', 'Agregar Pregunta'); }}

<script>
   changeActiveClass("preguntas");
</script>

@foreach($categorias["n"] as $indice) 
<div class="panel-group" id="accordion">
  <div class="panel panel-defaultOB">
    <div class="panel-heading">
      <h4 class="panel-title">
	{{ HTML::link('#collapse'.$indice, $categorias["v"][$indice], [
	    'data-toggle' => "collapse",	   
	    'data-parent' => "#accordion",
	    'class' => 'categoria'
	  ]); }}
      </h4>
    </div>
    @if($indice == 0) 
      {{"<div id='collapse".$indice."' class='panel-collapse collapse in'> "}}
    @else
      {{"<div id='collapse".$indice."' class='panel-collapse collapse'> "}}
    @endif
    
      <div class="panel-body">

      @foreach($questions as $question)
	@if($question->tematica == $categorias["k"][$indice])
	  <li>
	    <h4 class="pregunta">{{ $question->pregunta }}</h4>
	    <p class="respuesta">{{ $question->respuesta }}</p>
	  </li>
	@endif
      @endforeach

      </div>
    </div>
  </div>
</div>
@endforeach



<!--ul>
  @foreach($categorias["n"] as $indice)
    <li>
      <p>{{ $categorias["v"][$indice] }}</p>
      <ol>
      @foreach($questions as $question)
	@if($question->tematica == $categorias["k"][$indice])
	  <li>
	    <p>{{ $question->pregunta }}</p>
	    <p>{{ $question->respuesta }}</p>
	  </li>
	@endif
      @endforeach
      </ol>
    </li>
  @endforeach
</ul>
-->
@stop
@section("footer")
  @parent
@stop

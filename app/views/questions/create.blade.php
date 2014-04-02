@extends('layout') 
@section('content')
  {{ HTML::link('/', 'volver'); }}
  <h1>
    Haz una pregunta al equipo de intercambio acad&eacute;mico
  </h1>
  <script>
    changeActiveClass("preguntas");
  </script>

  {{ Form::open([
      "route" => "questions/create",
      "autocomplete" => "on",
      "before" => "csrf",
      "class" => "form-horizontal",
      "role" => "form"
    ]) }}

  <!-- csrf sirve para proteger de ataques cross site request forgery, quitar si da problemas, pues falta manejar la excepcion que arroja en tal caso -->
  <div class="form-group">
  {{-- Campo para carrera --}}
    {{ Form::label('carrera', 'Carrera', array(
	'id' => 'carreralab',
	'class' => 'col-sm-1 control-label'
      ))}}
    <div class="col-sm-6">
    {{ Form::select('carrera', array(
	'IMA' => 'Ingeniero Mec&aacute;nico Administrador', 
	'IME' => 'Ingeniero Mec&aacute;nico Electricista', 
	'IAS' => 'Ingeniero Administrador de Sistemas', 
	'IEC' => 'Ingeniero en Electr&oacute;nica y Comunicaciones', 
	'IEA' => 'Ingeniero en Electr&oacute;nica y Automatizaci&oacute;n', 
	'IMT' => 'Ingeniero en Materiales', 
	'IMF' => 'Ingeniero en Manufactura', 
	'IMEC' => 'Ingeniero en Mecatr&oacute;nica', 
	'IAE' => 'Ingeniero en Aeron&aacute;utica', 
	'ITS' => 'Ingeniero en Tecnolog&iacute;a de Software'
      ), 'IMEC', [
	'class' => 'form-control'
      ])}} 
    </div>
  </div>
  {{-- Campo para tematica --}}
  <div class="form-group" >
  {{ Form::label('tematica', 'Tem&aacute;tica', array(
      'id' => 'tematicalab',
      'class' => 'col-sm-1 control-label'
    )) }}
    <div class="col-sm-6">
    {{ Form::select('tematica', [
	'materias' => 'Materias', 
	'costos' => 'Costos', 
	'tramites' => 'Tr&aacute;mites', 
	'convenios' => 'Convenios'
      ], 'materias', array('class' => 'ask form-control')) }} 
    </div>
  </div>
  {{-- Campo para email --}}

  <div class="form-group">
    {{ Form::label('email','E-mail', array('class' => 'ask col-sm-1 control-label')) }}
    <div class="col-sm-6">
      {{ Form::email ('email', Input::old('email'), [
	  "placeholder" => "juan@ejemplo.com",
	  'class' => 'ask form-control',
	  'required' => 'true'
	]) }} 
    </div>
  </div>
  {{-- Campo para universidad --}}
  <div class="form-group">
  {{ Form::label('universidad', 'Convenio', array('class' => 'col-sm-1 control-label ask'))}}
    <div class="col-sm-6">
      {{ Form::text('universidad', Input::old('universidad'), [
	  "placeholder" => "CREPUQ",
	  'class' => 'ask form-control',
	  'required' => 'true'
	])}}
    </div>
  </div>
  {{-- Campo para pregunta --}}

  <div class="form-group">
    {{ Form::label('pregunta', 'Pregunta', array('class' => 'ask col-sm-1 control-label')) }} 
    <div class="col-sm-6">
      {{ Form::textarea('pregunta', null, array(
	  'class' => 'ask form-control',
	  'placeholder' => 'Redacta la pregunta',
	  'required' => 'true',
	  'rows'=> '5'
	)) }}
    </div>
  </div>
  <div class="form-group col-sm-1">
    {{ Form::submit('Enviar', array('class'=>'ask btn btn-default'))}}
    {{-- Form::reset('Limpiar', ['class' => 'ask form-control']) --}}
  </div>
  {{ Form::close() }}
@stop

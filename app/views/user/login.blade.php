@extends("layout")
@section("content")
  
  {{ HTML::style('css/signin.css') }}

  <div class="container">
    {{ Form::open([
	"route" => "user/login",
	"autocomplete" => "off",
	'class' => 'form-signin',
	'role' => 'form'
      ]) }}
    <h2 class="form-signin-heading">Ingrese sus Datos</h2>
  {{ Form::label("username", "Username", array('class' => 'login sr-only')) }}
  {{ Form::text("username", Input::old("username"), [
      "placeholder" => "Nombre de Usuario",
      'class' => 'form-control',
      'required' => 'true',
      'autofocus' => 'true'
  ]) }}
  {{ Form::label("password", "Password", array('class' => 'login sr-only')) }}
  {{ Form::password("password", [
      "placeholder" => "Contrase&ntilde;a",
      'class' => 'form-control',
      'required' => 'true'
  ]) }}
  @if ($error = $errors->first("password"))
    <div class="error">
      {{ $error }}
    </div>
  @endif
  {{ Form::submit("login", [
      'class' => 'btn btn-lg btn-primary btn-block'
    ]) }}
  {{ Form::close() }}  
  </div>
@stop
  @section("footer")
  @parent
@stop
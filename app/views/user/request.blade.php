@extends("layout")
@section("content")

  {{ Form::open([
      "route" => "user/request",
      "autocomplete" => "off" 
    ]) }}
  {{ Form::label("email", "Email") }}
  {{ Form::text("email", Input::get("email"), [
      "placeholder" => "john@example.com"
  ]) }}
  {{ Form::submit("Reset") }}
  {{ Form::close() }}
@stop
@section("footer")
  @parent
@stop
@extends("layout")
@section("content")
  <h2>Hello {{ Auth::user()->username }} </h2>
  <p>bienvenido~</p>
@stop
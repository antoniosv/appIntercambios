@section("header")
  {{ HTML::style('css/header.css') }}  
  <div class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="container">
      <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="{{ URL::route("home") }}">Intercambio Acad&eacute;mico</a>
      </div>
      <div class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
	  <!-- DROPDOWN de Programas -->
	  <li class="dropdown" id="programas">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programas <b class="caret"></b></a>
	    <ul class="dropdown-menu">
	      <li><a href="{{ URL::route("home") }}">Convocatorias</a></li>
	      <li class="divider"></li>
	      <li><a href="{{ URL::route("home") }}">Convenios</a></li>
	      <li><a href="{{ URL::route("home") }}">MEXFITEC</a></li>
	      <li><a href="{{ URL::route("home") }}">DAAD</a></li>
	      <li><a href="{{ URL::route("home") }}">CREPUQ</a></li>
	      <li class="divider"></li>
	      <li><a href="{{ URL::route("home") }}">Doble titulaci&oacute;n</a></li>
	      <li class="divider"></li>
	      <li><a href="{{ URL::route("home") }}">Pr&aacute;cticas Profesionales</a></li>
	    </ul>
	  <!-- DROPDOWN de Tramites -->
	  <li class="dropdown" id="tramites">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tr&aacute;mites<b class="caret"></b></a>
	    <ul class="dropdown-menu">
	      <li><a href="{{ URL::route("home") }}">Pasos</a></li>
	      <li class="divider"></li>	      
	      <li><a href="{{ URL::route("home") }}">Requisitos</a></li>
	      <li><a href="{{ URL::route("home") }}">Idioma</a></li>
	      <li class="divider"></li>
	      <li><a href="{{ URL::route("home") }}">Becas</a></li>
	      <li><a href="{{ URL::route("home") }}">Revalidaci&oacute;n</a></li>
	    </ul>

	  <!-- DROPDOWN de Tips -->
	  <li class="dropdown" id="tips">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tips<b class="caret"></b></a>
	    <ul class="dropdown-menu">
	      <li><a href="{{ URL::route("home") }}">Gu&iacute;as</a></li>
	      <li><a href="{{ URL::route("home") }}">Experiencias</a></li>
	      <li class="divider"></li>	      
	      <li><a href="{{ URL::route("home") }}">Presupuesto</a></li>
	      <li><a href="{{ URL::route("home") }}">Renta de Vivienda</a></li>
	      <li><a href="{{ URL::route("home") }}">Ropa</a></li>
	    </ul>
	  <!-- DROPDOWN de Preguntas -->
	  <li class="dropdown" id="preguntas">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preguntas<b class="caret"></b></a>
	    <ul class="dropdown-menu">
	      <li><a href="{{ URL::route("questions/faq") }}">Ver Preguntas</a></li>
	      <li class="divider"></li>	      
	      <li><a href="{{ URL::route("questions/new") }}">Hacer una Pregunta</a></li>

	    </ul>	    
	  <li id="preguntas"><a href="{{ URL::route("home") }}">Contactos</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	  @if(Auth::check())
	    <li><a href="{{ URL::route("user/logout") }}">Logout</a></li>
	    <li><a href="{{ URL::route("user/profile") }}">Perfil</a></li>
	    <li><a href="{{ URL::route("questions/list") }}">Revision</a></li>
	  @else
	    <li><a href="{{ URL::route("user/login") }}">Login</a></li>
	  @endif
	  
	</ul>

      </div>

      <!--
      <a href="{{ URL::route("home") }}">home</a>
	|
      @if(Auth::check())
x	<a href="{{ URL::route("user/logout") }}">logout</a>
	|
	<a href="{{ URL::route("user/profile") }}">profile</a>
	|
      @else
	<a href="{{ URL::route("user/login") }}">login</a>
	|
      @endif
	<a href="{{ URL::route("questions/list") }}">list</a>
	|
	<a href="{{ URL::route("questions/new") }}">create</a>
	|
	<a href="{{ URL::route("questions/faq") }}">FAQ</a>
	-->
    </div>
  </div>
@show
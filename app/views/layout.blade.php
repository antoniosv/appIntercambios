<!DOCTYPE html>
<html lang="en">
  <head>
    <meta chartset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tutorial</title>

    <!-- CSS -->
    {{ HTML::style('css/layout.css') }} 
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}

    <!-- Custom JS -->
    {{ HTML::script('js/jquery-1.11.0.min.js') }}
    {{ HTML::script('js/manage.js') }}

  </head>
  <body>
    @include("header")

    <div class="content">
      <div class="container">
	@yield('content')
      </div>
    </div>
    @include("footer")

    <!-- scripts -->
    {{ HTML::script('js/bootstrap.min.js')}}

  </body>
</html>

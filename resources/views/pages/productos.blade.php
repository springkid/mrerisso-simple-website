@extends('layout')

@section('navbar')
<!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Simple Website</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="productos">Productos</a></li>
            <li><a href="documentos">Documentos</a></li>

           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
@stop

@section('content')
    <div class="container">
		<h1>This is the Productos page</h1>
    </div>
@stop

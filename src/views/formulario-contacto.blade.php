@extends('contacto::base')
@section('head')
@parent
<meta name="description" content="Formulario de contacto para que puedas contarme lo que quieras." />
@stop
@section('title')
Contacto
@stop
@section('cuerpo')
<h1>Contacto</h1>
<hr />
@include ('contacto::errores')
{{ Form::open(array('route' => 'contacto','role' => 'form', 'class' => 'well well-lg fluzo-contacto')) }}
<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre',null,array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('email', 'Email') }}
{{ Form::email('email',null,array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('mensaje', 'Mensaje') }}
{{ Form::textarea('mensaje',null,array('class' => 'form-control')) }}
</div>
{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}

{{ Form::close() }}
@stop


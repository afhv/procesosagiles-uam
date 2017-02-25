@extends('layouts.app')
@section('contenido')
<p>Hola <b>{!! $name !!}</b> {{ empty($age)?'':'. Tu edad es ' }} <b>{{ $age or '' }}</b></p>
@stop

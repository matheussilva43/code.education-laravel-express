@extends('template')

@section('title')

    Olá

@stop

@section('content')

    <h1>Olá {{ $nome }}</h1>
    {{--
    	http://localhost:8000/ola/<b>nome<b>
    	{!! $nome !!} para imprimir sem o scape html
    --}}
    <h1>Olá {!! $nome !!}</h1>

@stop

@extends('layauts.plantilla')
@section('title','Productos')

@section('content')

<h1>Productos registrados</h1>

<ul>
@foreach ($productos as $productos)
<li>{{$productos->nombre}}</li>
@endforeach 
</ul>

@endsection

@extends('layauts.plantilla')
@section('title','Productos')

@section('content')

<h1>Productos registrados</h1>
<a href="{{route('AgregarProducto.Agregar')}}">Agregar Producto</a>

 <ul>
@foreach ($productos as $productoss)
<li>{{$productoss->nombre}}</li>
@endforeach 
</ul>
 
 
{{$productos->links()}}

@endsection


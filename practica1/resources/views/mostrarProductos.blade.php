@extends('layauts.plantilla')
@section('title','Productos')

@section('content')

<h1>Productos registrados</h1>
<a href="{{route('AgregarProducto.Agregar')}}">Agregar Producto</a>
<br>

 <ul>
@foreach ($productos as $productoss)
<li>{{$productoss->nombre}}
<a href="{{route('ActualizarProducto.Actualizar',$productoss)}}">Actualizar Producto</a>


</li>
@endforeach 
</ul>
 <br>
 
 
{{$productos->links()}}

@endsection


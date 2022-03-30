@extends('layauts.plantilla')

@section('title','Actualizar')

@section('content')

<h1>En esta pagina podemos actualizar productos</h1>

<form action="{{route('ActualizarProductoGuardar.GuardarActualizacion',$productos)}}" method="POST">

 @csrf

 
<label>Nombre</label>    
<input type="text" name="nombre" value="{{$productos->nombre}}">
<br>
<label>Descripcion</label>    
<textarea name="descripcion" cols="35" rows="10">{{$productos->descripcion}}</textarea>
<br>
<label>Categoria</label>
<input type="text" name="categoria" value="{{$productos->categoria}}">
<br>
<label>Precio Compra</label>
<input type="number" name="precioCompra" value="{{$productos->precioCompra}}">
<br>
<label>Precio Venta</label>
<input type="number" name="precioVenta" value="{{$productos->precioVenta}}">

<br>
<label>Cantidad</label>
<input type="number" name="stock" value="{{$productos->stock}}">

<br>
<button type="submit">Actualizar Producto</button>
</form> 
<br>
<a href="{{route('MostrarProductos.Mostrar')}}">Ver productos</a>

 
@endsection
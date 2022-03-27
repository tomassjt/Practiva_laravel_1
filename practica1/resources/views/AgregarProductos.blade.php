@extends('layauts.plantilla')

@section('title','Agregar')

@section('content')

<h1>Hola en esta pagina podemos agregar productos</h1>
<form action="{{route('Insertar.InsertarProductos')}}" method="POST">

 @csrf


<label>Nombre</label>    
<input type="text" name="nombre">
<br>
<label>Descripcion</label>    
<textarea name="descripcion" cols="35" rows="10"></textarea>
<br>
<label>Categoria</label>
<input type="text" name="categoria">
<br>
<label>Precio Compra</label>
<input type="number" name="precioCompra">
<br>
<label>Precio Venta</label>
<input type="number" name="precioVenta">

<br>
<label>Cantidad</label>
<input type="number" name="stock">

<br>
<button type="submit">Agregar Producto</button>
</form> 
<br>
<a href="{{route('MostrarProductos.Mostrar')}}">Ver productos</a>

 
@endsection
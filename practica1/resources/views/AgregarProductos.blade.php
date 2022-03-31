@extends('layauts.plantilla')

@section('title','Agregar')

@section('content')

<h1>Hola en esta pagina podemos agregar productos</h1>
<form action="{{route('Insertar.InsertarProductos')}}" method="POST">

 @csrf


<label>Nombre</label>    
<input type="text" name="nombre" value="{{old('nombre')}}">
 
@error('nombre')
<small>*{{$message}}</small>
@enderror
<br>
<label>Descripcion</label>    
<textarea name="descripcion" cols="35" rows="10" ></textarea>
@error('descripcion')
<small>*{{$message}}</small>
@enderror
<br>
<label>Categoria</label>
<input type="text" name="categoria">
@error('categoria')
<small>*{{$message}}</small>
@enderror
<br>
<label>Precio Compra</label>
<input type="number" name="precioCompra">
@error('precioCompra')
<small>*{{$message}}</small>
@enderror
<br>
<label>Precio Venta</label>
<input type="number" name="precioVenta">
@error('precioVenta')
<small>*{{$message}}</small>
@enderror
<br>
<label>Cantidad</label>
<input type="number" name="stock">
@error('stock')
<small>*{{$message}}</small>
@enderror
<br>
<button type="submit">Agregar Producto</button>
</form> 
<br>
<a href="{{route('MostrarProductos.Mostrar')}}">Ver productos</a>

 
@endsection
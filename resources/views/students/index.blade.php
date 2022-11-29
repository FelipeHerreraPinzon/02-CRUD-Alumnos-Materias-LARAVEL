
@extends('layouts.header')

@section('title', 'ESTUDIANTES')



@section('content')


<div class="container">
    <div class="row">
        <div class="col">


     <h1 class="text-center">ESTUDIANTES</h1>
<a href="{{route('students.create')}}" class="btn btn-success"><i class="fa-solid fa-square-plus"></i> CREAR ESTUDIANTE</a>
<table class="table table-success table-bordered mt-3 text-center" text-center>
    <thead>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>INFO</td>
        <td>EDITAR</td>
        <td>ELIMINAR</td>
    </thead>


@foreach ($students as $registro)
    <tr>
    <td><h3>{{$registro->id}} </h3></td>
    <td><h3>{{$registro->name_student}} </h3></td>
    <td><a href="{{route('students.show', $registro)}}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> Ver</a></td>  
    <td><a href="{{route('students.edit', $registro)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
  
        <td>
           <form action="{{route('students.destroy', $registro)}}" method="POST">
            @csrf
            @method('delete')
            
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
            </form>
    </td>
    
    </tr>
        
       
@endforeach
</table>
<br>
<br>

<br>
<br>





        </div>
    </div>
</div>


@endsection


@extends('layouts.footer')
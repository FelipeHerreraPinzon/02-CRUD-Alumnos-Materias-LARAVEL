
@extends('layouts.header')

@section('title', 'MATERIAS')



@section('content')



<div class="container">
    <div class="row">
        <div class="col">


<h1 class="text-center">MATERIAS</h1>
<a href="{{route('courses.create')}}" class="btn btn-success"><i class="fa-solid fa-square-plus"></i> CREAR MATERIA</a>
<table class="table table-primary table-bordered mt-3 text-center">
    <thead>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>INFO</td>
        <td>EDITAR</td>
        <td>ELIMINAR</td>
    </thead>
@foreach ($courses as $registro)

<tr>
    <td><h3>{{$registro->id}} </h3></td>
    <td><h3>{{$registro->course_name}}  </h3></td>
    <td> <a href="{{route('courses.show', $registro)}}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> Ver</a></td>  
    <td> 
        <a href="{{route('courses.edit', $registro)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
    </td> 
    <td>
            <form action="{{route('courses.destroy', $registro)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
            </form>
    </td>
    </tr>

   
@endforeach
</table>

        </div>
    </div>
</div>

@endsection


@extends('layouts.footer')





@extends('layouts.header')

@section('title', 'MATERIAS')



@section('content')






<table class="table table-success table-bordered mt-3 text-center">
    <th>
        <h3>LA MATERIA {{$course->course_name}} ES TOMADA POR LOS ALUMNOS</h3>
    </th>

 @foreach ($course->students as $registro)
  <tr>
  <td><h3>{{$registro->name_student}}</h3></td>
 </tr>
  @endforeach
</table>



<br>

@endsection


@extends('layouts.footer') 
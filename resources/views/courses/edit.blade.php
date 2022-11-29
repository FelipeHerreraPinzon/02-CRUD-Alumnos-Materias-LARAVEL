@extends('layouts.header')
@section('title', 'EDITAR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        EDITAR MATERIA
    </div>
    <div class="card-body">
<form method="POST" action="{{route('courses.update', $course)}}">
@csrf
@method('put')      

<input class="form-control" type="text" name="course_name" value="{{$course->course_name}}" required>
<br>

<input type="submit" name="enviar" class="btn btn-success" value="ACTUALIZAR">


</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')
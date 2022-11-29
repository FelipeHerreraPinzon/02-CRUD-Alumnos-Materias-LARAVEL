@extends('layouts.header')
@section('title', 'CREAR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR MATERIA
    </div>
    <div class="card-body">
<form method="POST" action="{{route('courses.store')}}">
@csrf
    

<input class="form-control" type="text" name="course_name" placeholder="INGRESA NOMBRE MATERIA" required>
<br>

<input type="submit" name="enviar" class="btn btn-success" value="ENVIAR">


</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')
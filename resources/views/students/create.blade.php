@extends('layouts.header')
@section('title', 'CREAR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR ESTUDIANTE
    </div>
    <div class="card-body">
<form method="POST" action="{{route('students.store')}}">
@csrf
    

<input class="form-control" type="text" name="name_student" placeholder="INGRESA NOMBRE ESTUDIANTE" required>
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
@extends('layouts.header')
@section('title', 'EDITAR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        EDITAR ESTUDIANTE
    </div>
    <div class="card-body">
<form method="POST" action="{{route('students.update', $student)}}">
@csrf
@method('put')      

<input class="form-control" type="text" name="name_student" value="{{$student->name_student}}" required>
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
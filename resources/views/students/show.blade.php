@extends('layouts.header')

@section('title', 'MATERIAS')



@section('content')


       
          <table class="table table-primary table-bordered mt-3 text-center">
            <th>
               <h3>EL ALUMNO {{$student->name_student}} VE LAS MATERIAS</h3>
            </th>
       
          @foreach ($student->courses as $registro)
          <tr>
          <td><h3>{{$registro->course_name}}</h3></td>
         </tr>
          @endforeach
        </table>
          

        </div>
    </div>
</div>

@endsection


@extends('layouts.footer') 
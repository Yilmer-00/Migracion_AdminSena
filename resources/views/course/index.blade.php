@extends('layouts.app')

@section('content')

<h1>LISTAR CURSOS</h1>

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Curso</th>
                <th>Jornada</th>
                <th>Área</th>
                <th>Centro de Formación</th>
            </tr>
        </thead>

        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_number }}</td>
                <td>{{ $course->day }}</td>
                <td>{{ $course->area->name }}</td>
                <td>{{ $course->trainig_center->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
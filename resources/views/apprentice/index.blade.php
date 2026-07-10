@extends('layouts.app')

@section('content')

<h1>LISTAR APRENDICES</h1>

<div class="container">


    <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Curso</th>
                <th>Computador</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->name }}</td>
                <td>{{ $apprentice->email }}</td>
                <td>{{ $apprentice->cell_number }}</td>
                <td>{{ $apprentice->course->course_number }}</td>
                <td>{{ $apprentice->computer->brand }}</td>

                <td>
                    <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-primary btn-sm">
                        Mostrar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection
<div class="evaluacion-container">
    <h1>Evaluando Aspirantes: {{ $formacion->nombre }}</h1>
    <p>Centro: {{ $formacion->trainingCenter->nombre ?? 'N/A' }}</p>

    <div class="table-responsive">
        <table class="table-sena">
            <thead>
                <tr>
                    <th>Documento / Nombre</th>
                    <th>Correo</th>
                    <th>Ficha / Curso</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formacion->courses as $course)
                @foreach($course->apprentices as $aspirante)
                <tr>
                    <td>{{ $aspirante->nombre ?? 'Aspirante' }}</td>
                    <td>{{ $aspirante->email ?? 'N/A' }}</td>
                    <td>{{ $course->codigo }}</td>
                    <td><span class="badge-warning">Por Evaluar</span></td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" class="btn-aprobar">Aprobar</button>
                            <button type="submit" class="btn-rechazar">Rechazar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
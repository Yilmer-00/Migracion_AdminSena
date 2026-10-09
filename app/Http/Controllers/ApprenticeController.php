<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
>>>>>>> 0e6366ef5c3784fb2abb716b37aed81c738b85e9
use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();

        return response()->json($apprentices);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email',
            'cell_number' => 'required|string|max:255',
=======
    /**
     * Muestra todos los aprendices con sus relaciones (curso y computador).
     */
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();

        return response()->json([
            'success' => true,
            'data' => $apprentices
        ], 200);
    }

    /**
     * Endpoint auxiliar para proveer cursos y computadores al frontend (reemplaza a registro/edit).
     */
    public function options()
    {
        $courses = Course::select('id', 'course_number')->get();
        $computers = Computer::select('id', 'number', 'brand')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'courses' => $courses,
                'computers' => $computers
            ]
        ], 200);
    }

    /**
     * Almacena un nuevo aprendiz validando sus llaves foráneas (reemplaza a dato).
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:apprentices,email',
            'cell_number' => 'nullable|string|max:20',
            'course_id'   => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice = Apprentice::create([
            'name'        => $request->input('name'),
            'email'       => $request->input('email'),
            'cell_number' => $request->input('cell_number', 'N/A'),
            'course_id'   => $request->input('course_id'),
            'computer_id' => $request->input('computer_id'),
        ]);

        $apprentice->load(['course', 'computer']);

        return response()->json([
            'success' => true,
            'message' => 'Aprendiz registrado con éxito.',
            'data'    => $apprentice
        ], 201);
    }

    /**
     * Muestra los detalles de un aprendiz específico.
     */
    public function show(Apprentice $apprentice)
    {
        $apprentice->load(['course', 'computer']);

        return response()->json([
            'success' => true,
            'data'    => $apprentice
        ], 200);
    }

    /**
     * Actualiza un aprendiz existente.
     */
    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:apprentices,email,' . $apprentice->id,
            'cell_number' => 'nullable|string|max:20',
            'course_id'   => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'cell_number' => $request->cell_number,
            'course_id'   => $request->course_id,
            'computer_id' => $request->computer_id,
        ]);

        $apprentice->load(['course', 'computer']);

        return response()->json([
            'success' => true,
            'message' => 'Aprendiz actualizado correctamente.',
            'data'    => $apprentice
        ], 200);
    }

    /**
     * Elimina un aprendiz.
     */
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return response()->json([
            'success' => true,
            'message' => 'Aprendiz eliminado correctamente.'
        ], 200);
    }

    /**
     * Guarda la postulación pública de un aspirante.
     */
    public function storePostulacion(Request $request)
    {
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'email'     => 'required|email|unique:apprentices,email',
>>>>>>> 0e6366ef5c3784fb2abb716b37aed81c738b85e9
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

<<<<<<< HEAD
        $apprentice = Apprentice::create($request->all());

        return response()->json($apprentice, 201);
    }

    public function show($id)
    {
        $apprentice = Apprentice::with(['course', 'computer'])->findOrFail($id);

        return response()->json($apprentice);
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email,' . $apprentice->id,
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice->update($request->all());

        return response()->json($apprentice);
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return response()->json($apprentice);
=======
        $apprentice = Apprentice::create([
            'name'        => $request->nombre,
            'email'       => $request->email,
            'cell_number' => 'N/A',
            'computer_id' => null,
            'course_id'   => $request->course_id,
            'estado'      => 'por_evaluar',
        ]);

        $apprentice->load('course');

        return response()->json([
            'success' => true,
            'message' => '¡Te has postulado con éxito! Tu solicitud ha quedado pendiente de evaluación.',
            'data'    => $apprentice
        ], 201);
>>>>>>> 0e6366ef5c3784fb2abb716b37aed81c738b85e9
    }
}

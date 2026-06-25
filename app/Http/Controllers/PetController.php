<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    // Método para mostrar la lista de mascotas (con paginación)
     // Asegúrate de que esta línea esté al inicio del archivo, junto con los otros "use"

public function index(Request $request)
{
    $query = Pet::query();

    // Si existe el parámetro 'buscar' en la URL y no está vacío, filtramos por especie
    if ($request->has('buscar') && $request->buscar != '') {
        $query->where('species', 'LIKE', '%' . $request->buscar . '%');
    }

    // Paginamos (5 por página) y añadimos los parámetros actuales a los enlaces de paginación
    $pets = $query->latest()->paginate(5)->appends($request->query());

    return view('pets.index', compact('pets'));
}
    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('pets.create');
    }

    // Método para guardar una nueva mascota
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        Pet::create($request->all());

        return redirect()->route('pets.index')
                         ->with('success', 'Mascota registrada correctamente.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();

        return view('mascotas.index', compact('mascotas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_nacimiento' => 'nullable|date',
            'foto' => 'nullable|image|max:2048'
        ]);

        // Guardar archivo en el servidor
        if ($request->hasFile('foto')){
            $validated['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $validated['user_id'] = $request->user()->id;

        // Guardar los datos
        Mascota::create($validated);

        // Redirigir
        return redirect()->route('mascotas.index')->with('success', 'Mascota creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $mascota = Mascota::findOrFail($id);

        if($mascota->user_id !== Auth::id()){
            abort(403, 'No tiene permiso para editar esta mascota');
        }
        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_nacimiento' => 'nullable|date',
            'foto' => 'nullable|image|max:2048'
        ]);

        // Recuperar mascota
        $mascota = Mascota::findOrFail($id);

        // Guardar los datos
        $mascota->update($validated);

        // Redirigir
        return redirect()->route('mascotas.index')->with('success', 'Mascota modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();

        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada con éxito');
    }
}

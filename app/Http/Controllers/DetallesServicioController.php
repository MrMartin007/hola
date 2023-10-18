<?php

namespace App\Http\Controllers;

use App\Models\DetallesServicio;
use Illuminate\Http\Request;

/**
 * Class DetallesServicioController
 * @package App\Http\Controllers
 */
class DetallesServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesServicios = DetallesServicio::paginate();

        return view('detalles-servicio.index', compact('detallesServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesServicio = new DetallesServicio();
        return view('detalles-servicio.create', compact('detallesServicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesServicio::$rules);

        $detallesServicio = DetallesServicio::create($request->all());

        return redirect()->route('detalles-servicios.index')
            ->with('success', 'DetallesServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesServicio = DetallesServicio::find($id);

        return view('detalles-servicio.show', compact('detallesServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesServicio = DetallesServicio::find($id);

        return view('detalles-servicio.edit', compact('detallesServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesServicio $detallesServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesServicio $detallesServicio)
    {
        request()->validate(DetallesServicio::$rules);

        $detallesServicio->update($request->all());

        return redirect()->route('detalles-servicios.index')
            ->with('success', 'DetallesServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesServicio = DetallesServicio::find($id)->delete();

        return redirect()->route('detalles-servicios.index')
            ->with('success', 'DetallesServicio deleted successfully');
    }
}

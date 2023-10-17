<?php

namespace App\Http\Controllers;

use App\Models\AsignarServicio;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Tecnico;
use App\Models\estado;
use Illuminate\Http\Request;

/**
 * Class AsignarServicioController
 * @package App\Http\Controllers
 */
class AsignarServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignarServicios = AsignarServicio::paginate();
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');

        return view('asignar-servicio.index', compact('asignarServicios','clientes','servicios'))
            ->with('i', (request()->input('page', 1) - 1) * $asignarServicios->perPage());
    }

    public function index_asig()
    {

        $asignarServicios = AsignarServicio::where('estados_id', 1)->paginate();
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $estado = Estado::pluck('estado', 'id');
        $tecnico = Tecnico::pluck('nombre_tecnico', 'id');


        return view('asignar-servicio.index_asig', compact('asignarServicios','clientes','servicios','estado','tecnico'))
            ->with('i', (request()->input('page', 1) - 1) * $asignarServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignarServicio = new AsignarServicio();
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        return view('asignar-servicio.create', compact('asignarServicio','clientes','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AsignarServicio::$rules);

        $asignarServicio = AsignarServicio::create($request->all());

        return redirect()->route('asignar-servicios.index')
            ->with('success', 'AsignarServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignarServicio = AsignarServicio::find($id);

        return view('asignar-servicio.show', compact('asignarServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignarServicio = AsignarServicio::find($id);
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $estado = Estado::pluck('estado', 'id');
        $tecnico = Tecnico::pluck('nombre_tecnico', 'id');

        return view('asignar-servicio.edit', compact('asignarServicio','clientes','servicios','estado','tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AsignarServicio $asignarServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignarServicio $asignarServicio)
    {
        request()->validate(AsignarServicio::$rules);

        $asignarServicio->update($request->all());

        return redirect()->route('index_asig')->with('success', 'AsignarServicio updated successfully');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignarServicio = AsignarServicio::find($id)->delete();

        return redirect()->route('asignar-servicios.index')
            ->with('success', 'AsignarServicio deleted successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function edit2($id)
    {
        $asignarServicio = AsignarServicio::find($id);
        $clientes = Cliente::pluck('nombre_cliente', 'id');
        $servicios = Servicio::pluck('nombre_servicio', 'id');
        $estado = Estado::pluck('estado', 'id');
        $tecnico = Tecnico::pluck('nombre_tecnico', 'id');

        return view('asignar-servicio.edit2', compact('asignarServicio','clientes','servicios','estado','tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AsignarServicio $asignarServicio
     * @return \Illuminate\Http\Response
     */
    public function updateasig(Request $request, AsignarServicio $asignarServicio)
    {
        request()->validate(AsignarServicio::$rules);

        $asignarServicio->update($request->all());

        return redirect()->route('asignar-servicios.index')
            ->with('success', 'AsignarServicio updated successfully');
    }
}


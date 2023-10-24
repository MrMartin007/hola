<?php

namespace App\Http\Controllers;

use App\Models\AsignarServicio;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Tecnico;
use App\Models\estado;
use App\Models\DetallesServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $detallesServicio = DetallesServicio::all();
        $clientes = Cliente::all();
        $asignarServicios = DB::table('asignar_servicios')
            ->join('detalles_servicios','asignar_servicios.detalles_servicios_id', '=', 'detalles_servicios.id')
            ->join('clientes','asignar_servicios.clientes_id', '=', 'clientes.id')

            ->select('asignar_servicios.*','detalles_servicios.detalle_servicio','clientes.nombre_cliente','detalles_servicios.precio')
        ->paginate(10);//el numero de filas


        return view('asignar-servicio.index', compact('asignarServicios','clientes','detallesServicio'))
            ->with('i', (request()->input('page', 1) - 1) * $asignarServicios->perPage());
    }

    public function index_asig()
    {
        $estados = [1, 3]; // Valores de estados_id que deseas obtener

        $asignarServicios = AsignarServicio::whereIn('estados_id', $estados)->paginate();
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
        $DetallesServicio = DetallesServicio::all()->groupBy('servicios_id');

        return view('asignar-servicio.create', compact('asignarServicio', 'clientes', 'servicios', 'DetallesServicio'));
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
        $detallesServicio = DetallesServicio::pluck('detalle_servicio', 'id');


        return view('asignar-servicio.edit', compact('asignarServicio','clientes','servicios','estado','tecnico','detallesServicio'));
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
        $estado = Estado::pluck('estado', 'id');
        $tecnico = Tecnico::pluck('nombre_tecnico', 'id');
        $detallesServicio = DetallesServicio::pluck('detalle_servicio', 'id');
        $detallesServicios = DetallesServicio::pluck('precio', 'id');


        return view('asignar-servicio.edit2', compact('asignarServicio','clientes','estado','tecnico','detallesServicio','detallesServicios'));
    }
    public function marcarComoCompletado(AsignarServicio $id)
    {
        $id->update(['estados_id' => 3]);

        return redirect()->route('index_asig')
            ->with('success', 'El servicio ha sido marcado como completado.');
    }
}


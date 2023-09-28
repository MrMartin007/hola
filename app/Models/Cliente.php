<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_cliente
 * @property $apellido_cliente
 * @property $direccion_cliente
 * @property $correo_cliente
 * @property $telefono_cliente
 * @property $nit_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre_cliente' => 'required',
		'apellido_cliente' => 'required',
		'direccion_cliente' => 'required',
		'correo_cliente' => 'required',
		'telefono_cliente' => 'required',
		'nit_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cliente','apellido_cliente','direccion_cliente','correo_cliente','telefono_cliente','nit_cliente'];



}

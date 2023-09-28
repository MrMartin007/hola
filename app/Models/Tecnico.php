<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 *
 * @property $id
 * @property $nombre_tecnico
 * @property $apellido_tecnico
 * @property $direccion_tecnico
 * @property $correo_tecnico
 * @property $telefono_tecnico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tecnico extends Model
{
    
    static $rules = [
		'nombre_tecnico' => 'required',
		'apellido_tecnico' => 'required',
		'direccion_tecnico' => 'required',
		'correo_tecnico' => 'required',
		'telefono_tecnico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_tecnico','apellido_tecnico','direccion_tecnico','correo_tecnico','telefono_tecnico'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesServicio
 *
 * @property $id
 * @property $detalle_servicio
 * @property $servicios_id
 * @property $precio
 *
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesServicio extends Model
{

    static $rules = [
		'detalle_servicio' => 'required',
		'servicios_id' => 'required',
        'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalle_servicio','servicios_id','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }

    public function detallesServicio()
    {
        return $this->hasMany(DetallesServicio::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsignarServicio
 *
 * @property $id
 * @property $detalle_servicio
 * @property $total
 * @property $clientes_id
 * @property $estados_id
 * @property $tecnicos_id
 * @property $created_at
 * @property $updated_at
 * @property $servicios_id
 *
 * @property Cliente $cliente
 * @property Estado $estado
 * @property Servicio $servicio
 * @property Tecnico $tecnico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AsignarServicio extends Model
{

    static $rules = [
		'detalle_servicio' => '',
		'total' => 'required',
		'clientes_id' => '',
		'estados_id' => '',
		'tecnicos_id' => '',
		'servicios_id' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalle_servicio','total','clientes_id','estados_id','tecnicos_id','servicios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'clientes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estados_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tecnico()
    {
        return $this->hasOne('App\Models\Tecnico', 'id', 'tecnicos_id');
    }


}

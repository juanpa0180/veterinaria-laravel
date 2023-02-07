<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $mascotas_id
 * @property $idDueño
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita $cita
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'mascotas_id' => 'required',
		'idDueño' => 'required',
		'nombre' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mascotas_id','idDueño','nombre','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cita()
    {
        return $this->hasOne('App\Models\Cita', 'idCita', 'mascotas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'identificacion', 'idDueño');
    }
    

}

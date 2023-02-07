<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $idCita
 * @property $fechaHora
 * @property $mascota
 * @property $created_at
 * @property $updated_at
 *
 * @property Mascota $mascota
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'idCita' => 'required',
		'fechaHora' => 'required',
		'mascota' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCita','fechaHora','mascota'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mascota()
    {
        return $this->hasOne('App\Models\Mascota', 'mascotas_id', 'idCita');
    }
    

}

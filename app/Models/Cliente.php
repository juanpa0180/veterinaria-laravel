<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $identificacion
 * @property $nombres
 * @property $apellidos
 * @property $celular
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Mascota[] $mascotas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'identificacion' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'celular' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['identificacion','nombres','apellidos','celular','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mascotas()
    {
        return $this->hasMany('App\Models\Mascota', 'idDueño', 'identificacion');
    }
    

}

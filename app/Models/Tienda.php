<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tienda
 *
 * @property $id
 * @property $nombre
 * @property $fechaApertura
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tienda extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechaApertura'];



}

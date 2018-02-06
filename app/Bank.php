<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'imagen', 'max_finance', 'percentaje_cuota',
        'time', 'finance', 'tasa_anual', 'is_active','age_min','age_max'
    ];
}

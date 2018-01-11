<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['name','dni','email','phone','type', 'cv', 'messages',
        'certificate', 'bank_id', 'resul'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}

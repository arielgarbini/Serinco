<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventInscription extends Model
{
    protected $fillable = ['name','email','phone', 'event_id'];

    protected $table = 'event_inscriptions';

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

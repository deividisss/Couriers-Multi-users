<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    public function transport(){
        return $this->belongsTo(Courier::class);
    }

    protected $fillable = [
        'brand',
        'model',
        'year',
        'registration_number',
        'courier_id'
      ];
}
